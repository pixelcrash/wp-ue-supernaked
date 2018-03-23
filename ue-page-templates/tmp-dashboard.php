<?php /* Template Name: Dashboard */ ?>

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
        <div class="uk-width-1-2"><h2>Project</h2></div>
        <div class="uk-width-1-2 uk-text-right">
          <a href="#" class="uk-icon-link uk-margin-small-right" uk-icon="icon: plus-circle; ratio: 2;"></a>
        </div>
      </div>
      
      <ul uk-tab>
          <li class="uk-active"><a href="#">All Projects</a></li>
          <li><a href="#">Active Projects</a></li>
          <li><a href="#">Inactive Projects</a></li>
      </ul>
      
      <table class="uk-table uk-table-striped">
         <thead>
        <tr>
          <th>&nbsp;</th>
          <th>Author</th>
          <th>Title</th>
          <th>Image</th>
          <th>Preview</th>
          <th>Date</th>
          <th>Status</th>
          <th>&nbsp;</th>
        </tr>
      </thead>
      <tbody>
        <?php  $x = 1;

            do { ?>
    

        
        <tr>
          <td>
            <a href="<?php echo esc_url(add_query_arg( 'id', '1', home_url( '/dashboard/edit-project/' ))); ?>" class="uk-icon-link uk-margin-small-right" uk-icon="file-edit"></a>
            <a href="#" class="uk-icon-link uk-margin-small-right" uk-icon="world"></a>
          </td>
          <td>Georg Kettele</td>
          <td>My first Post</td>
          <td>Image</td>
          <td>a small preview Text</td>
          <td>12. October 2018</td>
          <td>green</td>
          <td>
            <a href="#" class="uk-icon-link uk-margin-small-right" uk-icon="cog"></a>
            <a href="#" class="uk-icon-link uk-margin-small-right" uk-icon="icon: link"></a>
            <a href="#" class="uk-icon-link uk-margin-small-right" uk-icon="trash"></a> 
          </td>  
        </tr>
        
        <?php  $x++;
      } while ($x <= 15);
      ?>
      </tbody>
      </table>
      
    </div>
    
    
</div>

</section>

<?php get_footer(); ?>