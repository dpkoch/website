<?php
  $page_title='Portfolio';
  $page_heading='Portfolio';
  $header_css='/styles/publications.css';
  $header_js='<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular.min.js"></script>';
  include($_SERVER['DOCUMENT_ROOT'] . '/include/header.php');
?>

<h3>Publications</h3>

<div data-ng-app="pubApp" data-ng-controller="pubCtrl">
  <div class="pub-year" data-ng-repeat="year in years | orderBy:'+':true">
    <h4>{{ year }}</h4>
    <ul class="pub-articles">
      <li class="pub-article" data-ng-repeat="article in articles | filter:{ year : year }">
        <span class="pub-title">{{ article.title }}</span>
        <ul class="pub-authors">
          <li class="pub-author" data-ng-repeat="author in article.authors">{{ author | author }}</li>
        </ul>
        <span class="pub-source">{{ article | source }}</span>
      </li>
    </ul>
  </div>
</div>

<p>For more details, see my <a href="https://scholar.google.com/citations?user=cohw-PUAAAAJ" target="_blank">Google Scholar</a> profile.</p>

<?php
  $footer_js='<script src="/scripts/pubController.js"></script>';
  include ($_SERVER['DOCUMENT_ROOT'] . '/include/footer.php');
?>
