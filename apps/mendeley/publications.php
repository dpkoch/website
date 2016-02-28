<?php

// set response headers
header('Content-Type: application/json');

// read configuration file
$config_file = 'config.ini';
$config = parse_ini_file($config_file);

// get existing authorization data
$auth_file = '.auth';
$auth_buffer = 60; // get new authorization token 60 seconds before current one expires
$auth_data = json_decode(file_get_contents($auth_file), true);
$access_token = $auth_data['access_token'];

// get new access token if ours has expired
if (time() - $auth_data['time'] > $auth_data['expires_in'] - $auth_buffer) {

  // authorization request
  $auth_url = 'https://api.mendeley.com/oauth/token';
  $auth_userpwd = $config['app_id'] . ':' . $config['app_secret'];
  $auth_query = http_build_query(array(
    "grant_type" => "client_credentials",
    "scope" => "all"
  ));

  $ch_auth = curl_init($auth_url);
  curl_setopt($ch_auth, CURLOPT_POST, true);
  curl_setopt($ch_auth, CURLOPT_HEADER, true);
  curl_setopt($ch_auth, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
  curl_setopt($ch_auth, CURLOPT_USERPWD, $auth_userpwd);
  curl_setopt($ch_auth, CURLOPT_POSTFIELDS, $auth_query);
  curl_setopt($ch_auth, CURLOPT_RETURNTRANSFER, true);

  $auth_response = curl_exec($ch_auth);

  $auth_http_code = curl_getinfo($ch_auth, CURLINFO_HTTP_CODE);

  if ($auth_http_code == 200) {
    $body = substr($auth_response, curl_getinfo($ch_auth, CURLINFO_HEADER_SIZE));
    $auth_data = json_decode($body, true);
    $auth_data['time'] = time();
    file_put_contents('.auth', json_encode($auth_data));

    $access_token = $auth_data['access_token'];

  } else {
    echo 'ERROR!!!';
  }

  curl_close($ch_auth);
}

// get profile id
$profile_query = http_build_query(array(
  'email' => $config['email']
));
$profile_url = 'https://api.mendeley.com/profiles?' . $profile_query;

$profile_header = array(
  'Authorization: Bearer ' . $access_token,
  'Accept: application/vnd.mendeley-profiles.1+json'
);

$ch_profile = curl_init($profile_url);
curl_setopt($ch_profile, CURLOPT_HEADER, true);
curl_setopt($ch_profile, CURLOPT_HTTPHEADER, $profile_header);
curl_setopt($ch_profile, CURLOPT_RETURNTRANSFER, true);

$profile_response = curl_exec($ch_profile);
$profile_data = json_decode(substr($profile_response, curl_getinfo($ch_profile, CURLINFO_HEADER_SIZE)), true);
$profile_id = $profile_data[0]['id'];

curl_close($ch_profile);

// get publications
$docs_query = http_build_query(array(
  'profile_id' => $profile_id,
  'authored' => 'true',
  'view' => 'bib',
  'limit' => $config['max_results'],
  'order' => 'desc',
  'sort' => 'created'
));
$docs_url = 'https://api.mendeley.com/documents?' . $docs_query;

$docs_header = array(
  'Authorization: Bearer ' . $access_token,
  'Accept: application/vnd.mendeley-document.1+json'
);

$ch_docs = curl_init($docs_url);
curl_setopt($ch_docs, CURLOPT_HEADER, true);
curl_setopt($ch_docs, CURLOPT_HTTPHEADER, $docs_header);
curl_setopt($ch_docs, CURLOPT_RETURNTRANSFER, true);

$docs_response = curl_exec($ch_docs);
$docs_data = json_decode(substr($docs_response, curl_getinfo($ch_docs, CURLINFO_HEADER_SIZE)), true);

curl_close($ch_docs);

// output data
$data = array(
  'articles' => $docs_data
);
echo json_encode($data);

?>
