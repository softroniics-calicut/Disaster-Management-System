
  <aside id="left-panel" class="left-panel">
     <?php
         if($_SESSION["type_id"]=='admin')
            { ?>
            <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand">ADMIN</a>
                
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">

                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                     <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-check"></i>Panchayath body</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="add-panchayath.php">Add</a></li>
                             <li><i class="fa fa-puzzle-piece"></i><a href="view-panchayath.php">View</a></li>
                           
                        </ul>
                    </li>


                     <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>CampOrganizer</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-id-badge"></i><a href="view-organizer.php">View</a></li>
                           
                           
                        </ul>
                    </li>
                     <li class="menu-item-has-children dropdown">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Users</a>
                        <ul class="sub-menu children dropdown-menu">
               
                             <li><i class="fa fa-eye"></i><a href="viewusers.php">View users</a></li>
                             <!-- <li><i class="fa fa-eye"></i><a href="editusers.php">Edit users</a></li> -->

                           
                        </ul>
                    </li>

                     <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-file-text"></i>Volunteers</a>
                        <ul class="sub-menu children dropdown-menu">
                        
                            <!-- <li><i class="fa fa-id-badge"></i><a href="addarea.php">add area</a></li> -->
                            <li><i class="fa fa-id-badge"></i><a href="view-volunteers.php">view Volunteers</a></li>
                           
                        </ul>
                    </li>
                     <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa  fa-home"></i>Camp</a>
                        <ul class="sub-menu children dropdown-menu">
                           
                           
                             <li><i class="fa fa-eye"></i><a href="viewcamp.php">View camp</a></li>
                           
                        </ul>
                    </li>
                     <!-- <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa  fa-gears (alias)"></i>Services</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="addservice.php">Add service</a></li>
                           
                             <li><i class="fa fa-eye"></i><a href="viewservice.php">View Edit</a></li>
                           
                        </ul>
                    </li> -->

                </ul>
            </div>
        </nav>
    
<?php
         }

         ?>
         <?php 

        if($_SESSION["type_id"]=='police')
        { 

        ?>
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand">POLICE</a>
                
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">

                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                     <li class="menu-item-has-children dropdown">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-wheelchair"></i>Victim</a>
                        <ul class="sub-menu children dropdown-menu">
               
                             <li><i class="fa fa-eye"></i><a href="viewvictim.php">View victim</a></li>
                           
                        </ul>
                    </li>
                      <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa  fa-home"></i>Camp</a>
                        <ul class="sub-menu children dropdown-menu">
                           
                             <li><i class="fa fa-eye"></i><a href="viewcamp.php">View camp</a></li>
                           
                        </ul>
                    </li>
                     <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa   fa-comment"></i>Notification</a>
                        <ul class="sub-menu children dropdown-menu">
                            
                            <li><i class="fa fa-eye"></i><a href="viewnoti.php">View notification</a></li>
                           
                        </ul>
                    </li>
            </ul>
        </div>
    </nav>


<?php 

} ?>
<?php
        if($_SESSION["type_id"]=='collector')
    
{
        ?>
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand">COLLECTOR</a>
                
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">

                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                     <li class="menu-item-has-children dropdown">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-wheelchair"></i>Victim</a>
                        <ul class="sub-menu children dropdown-menu">
               
                             <li><i class="fa fa-eye"></i><a href="viewvictim.php">View victim</a></li>
                           
                        </ul>
                    </li>
                      <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa  fa-home"></i>Camp</a>
                        <ul class="sub-menu children dropdown-menu">
                           
                             <li><i class="fa fa-eye"></i><a href="viewcamp.php">View camp</a></li>
                           
                        </ul>
                    </li>
                     <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa   fa-comment"></i>Notification</a>
                        <ul class="sub-menu children dropdown-menu">
                           
                            <li><i class="fa fa-eye"></i><a href="viewnoti.php">View notification</a></li>
                           
                        </ul>
                    </li>
            </ul>
        </div>
    </nav>

<?php 
} ?>
<?php
        if($_SESSION["type_id"]=='volunteer')

    { 
        ?>
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand">VOLUNTREERS</a>
                
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">

                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                     <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa  fa-truck"></i>Requirements</a>
                        <ul class="sub-menu children dropdown-menu">
                            
                            <li><i class="fa fa-eye"></i><a href="viewmedreq.php">View Medical Rq</a></li>
                              <li><i class="fa fa-eye"></i><a href="viewreq.php">View Requirements</a></li>
                          
                           
                        </ul>
                    </li>
                      <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa  fa-truck"></i>Materials</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa  fa-shopping-cart"></i><a href="collection.php">collected</a></li>
                           
                          
                           
                        </ul>
                    </li>

                    
            </ul>
        </div>
    </nav>

<?php 
}
        

        if($_SESSION["type_id"]=='camporganizer')
    {
     ?>
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand">CAMP ORGANIZER</a>
                
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">

                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa  fa-home"></i>Camp</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="addcamp.php">Add camp</a></li>
                           
                             <li><i class="fa fa-eye"></i><a href="viewcamp.php">View camp</a></li>
                           
                        </ul>
                    </li>
                     <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-wheelchair"></i>Victim</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-id-badge"></i><a href="victimreg.php">Add victim</a></li>
                            <li><i class="fa fa-folder-open-o"></i><a href="editvictim.php">Edit victim</a></li>
                             
                           
                           
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa  fa-truck"></i>Requirements</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa  fa-shopping-cart"></i><a href="addreq.php">Add Requirements</a></li>
                            <li><i class="fa fa-medkit"></i><a href="medreq.php">Add Medical Rq</a></li>
                           
                          
                           
                        </ul>
                    </li>


                      <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa  fa-home"></i>Camp facilities</a>
                        <ul class="sub-menu children dropdown-menu">
                           
                             <li><i class="fa fa-eye"></i><a href="viewcamp.php">View</a></li>
                             <li><i class="fa fa-eye"></i><a href="editcamp.php">edit facility</a></li>
                           
                        </ul>
                    </li>
                     <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa   fa-comment"></i>Notification</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="notificationadd.php">Add notification</a></li>
                            <li><i class="fa fa-eye"></i><a href="viewnoti.php">View notification</a></li>  
                           
                        </ul>
                    </li>
            </ul>
        </div>
    </nav>

<?php } ?>


<?php 
        if($_SESSION["type_id"]=='healthcoordinator')
    { ?>
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand">HEALTH CO-ORDINATOR</a>
                
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">

                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                     <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa  fa-truck"></i>Requirements</a>
                        <ul class="sub-menu children dropdown-menu">
                            
                            <li><i class="fa fa-eye"></i><a href="viewmedreq.php">View Medical Rq</a></li>
                        
                          
                           
                        </ul>
                    </li>
                     <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa   fa-comment"></i>Notification</a>
                        <ul class="sub-menu children dropdown-menu">
                           
                              <li><i class="fa fa-eye"></i><a href="viewnoti.php">View notification</a></li>
                           
                        </ul>
                    </li>

                    
            </ul>
        </div>
    </nav>

<?php } ?>

<?php 
        if($_SESSION["type_id"]=='guest')
    { ?>
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand">GUEST</a>
                
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">

                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                     <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa  fa-home"></i>Camp</a>
                        <ul class="sub-menu children dropdown-menu">
                            
                             <li><i class="fa fa-eye"></i><a href="viewcamp.php">View camp</a></li>
                           
                        </ul>
                    </li>

                      <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-wheelchair"></i>Victim</a>
                        <ul class="sub-menu children dropdown-menu">
                            
                             <li><i class="fa fa-eye"></i><a href="viewvictim.php">View victim</a></li>
                           
                           
                        </ul>
                    </li>
                     <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa  fa-truck"></i>Requirements</a>
                        <ul class="sub-menu children dropdown-menu">
                            
                            <li><i class="fa fa-eye"></i><a href="viewmedreq.php">View Medical Rq</a></li>
                              <li><i class="fa fa-eye"></i><a href="viewreq.php">View Requirements</a></li>
                          
                           
                        </ul>
                    </li>


                    
            </ul>
        </div>
    </nav>

<?php } ?>

</aside>                    
                   

                    

                  
                    

                    
              
               