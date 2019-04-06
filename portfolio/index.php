<?php
  $page_title='Portfolio';
  $page_heading='Portfolio';
  $header_css=array('/styles/projects.css', '/styles/publications.css');
  $header_js='<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular.min.js"></script>';
  include($_SERVER['DOCUMENT_ROOT'] . '/include/header.php');
?>

<section>
  <h3>Projects</h3>

  <article class="project">
    <div class="project-header">
      <figure class="project-image"><a href="http://rosflight.org/"><img src="rosflight.svg" alt="ROSflight"></a></figure>
      <div class="project-header-details">
        <h4>ROSflight</h4>
        <span class="project-role">Co-creator</span>
        <span class="project-dates">May 2016 &ndash; Present</span>
      </div>
    </div>
    <p>ROSflight is a lean, open-source flight controller geared toward research applications. The core flight stack is built as a standalone library, with support for a selection of flight controller hardware as well as software-in-the-loop simulation. The project also includes a ROS ecosystem for interfacing with research code. <a href="http://rosflight.org/">Learn more here.</a></p>
  </article>
</section>

<section>
<h3>Publications</h3>

<div data-ng-app="pubApp" data-ng-controller="pubCtrl">

  <p class="pub-loading" data-ng-hide="loaded || error">Loading...</p>

  <div class="pub-year" data-ng-show="loaded" data-ng-repeat="year in years | orderBy:'+':true">
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

  <p class="pub-error" data-ng-show="error">Sorry, there was an error loading the data :(</p>

</div>

<p>For more details, see my <a href="https://scholar.google.com/citations?user=cohw-PUAAAAJ" target="_blank">Google Scholar</a> profile.</p>
</section>

<?php
  $footer_js='<script src="/scripts/pubController.js"></script>';
  include ($_SERVER['DOCUMENT_ROOT'] . '/include/footer.php');
?>
