<?php /* Template Name: Edit Project */ ?>

<?php get_header(); ?>

<section id="dashboard" role="main" ng-app>

<div id="sidebar">
<ul> 
  <li>dkdk</li>
  <li>dkkd</li>
  <li>dkk</li>
  <li>dkk</li>
  <li>dkk</li>
</ul>
</div>

<div id="contentbar">
  <div class="uk-width-1-1 uk-text-right topbar">header</div>
  
  <div class="uk-width-1-1">
    
    <div class="uk-grid">
      <div class="uk-width-1-2"><h2>Edit Project <?php echo $_GET['id']; ?></h2></div>
      <div class="uk-width-1-2 uk-text-right">
        <a href="#" class="uk-icon-link uk-margin-small-right" uk-icon="icon: plus-circle; ratio: 2;"></a>
      </div>
    </div>

  </div>
  
  <div class="uk-width-1-1">
    <ul class="uk-tab"  uk-switcher="connect: .switcher-container">
        <li class="uk-active"><a href="#">Preview</a></li>
        <li><a href="#">Description</a></li>
        <li><a href="#">Photos</a></li>
        <li><a href="#">Plans</a></li>
        <li><a href="#">Extra Files</a></li>
        <li><a href="#">Links</a></li>
    </ul>
  </div>
  
  <div class="uk-switcher switcher-container">
    <div class="uk-width-1-1">one</div>
    <div class="uk-width-1-1">two</div>
    <div class="uk-width-1-1">three</div>
    <div class="uk-width-1-1">four</div>
    <div class="uk-width-1-1">five</div>
    <div class="uk-width-1-1">six</div>
  </div>
  
</div>

</section>

<?php get_footer(); ?>