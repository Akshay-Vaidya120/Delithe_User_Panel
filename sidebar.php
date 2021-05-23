 <div class="sidebar" style="text-align:center;padding-top:10px">
  <img src="assets/images/logo.png" style="height:60px;width:150px;margin-left:5px;margin-bottom:10px">
  
      <div class="sidebar">
  <a class="active" href="dashboard.php">Dashboard</a>
  <a href="#news">My Profile</a>
  <a href="#contact">Job Openings</a>
  <a href="#about">Logout</a>
</div>
    <style>
      #signout{
        color:maroon;
        font-weight:bold;
      }
     #signout:hover:not(.active){
      background-color:maroon;
      color:#fff;
     }

    </style>
    <style>
    body {
    margin: 0;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    background-color: #fff;
}
      .sidebar {
        margin: 0;
        padding: 0;
        width: 200px;
        background-color:#f9f9f8;
        position: fixed;
        height: 100%;
        overflow: auto;
      }

      /* Sidebar links */
      .sidebar a {
        display: block;
        color: black;
        padding: 16px;
        text-decoration: none;
      }

      /* Active/current link */
      .sidebar a.active {
        background-color: maroon;
        color: white;
      }

      /* Links on mouse-over */
      .sidebar a:hover:not(.active) {
        background-color: #555;
        color: white;
      }

      /* Page content. The value of the margin-left property should match the value of the sidebar's width property */
      div.content {
        margin-left: 200px;
        padding: 1px 16px;
        height: fit-content;
      }
      /* div.content1{
        margin-left: 200px;
        padding: 1px 16px;
        height: 1000px;
      } */

      /* On screens that are less than 700px wide, make the sidebar into a topbar */
      @media screen and (max-width: 700px) {
        .sidebar {
          width: 100%;
          height: auto;
          position: relative;
        }

        .sidebar a {
          float: left;
        }

        div.content {
          margin-left: 0;
        }
        /* div.content1{
          margin-left: 0;
        } */
        
      }

      /* On screens that are less than 400px, display the bar vertically, instead of horizontally */
      @media screen and (max-width: 400px) {
        .sidebar a {
          text-align: center;
          float: none;
        }
      }
    </style> 
  </div>