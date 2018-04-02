<?php
/**
 * Created by PhpStorm.
 * User: ivyO
 * Date: 21/02/2018
 * Time: 4:09 PM
 */
?>

<!-- Left side column. contains the logo and sidebar -->
<aside class="left-side sidebar-offcanvas">
  <section class="sidebar ">
    <div class="page-sidebar  sidebar-nav">

      <div class="clearfix"></div>
      <!-- BEGIN SIDEBAR MENU -->
      <ul id="menu" class="page-sidebar-menu">
        <li>
          <a href="#">
            <i class="livicon" data-name="home" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
            <span class="title">Dashboard</span>
          </a>
        </li>
        <li>
               <a href="#">
                 <i class="livicon" data-name="folder-add" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                 <span class="title">Orders</span>
               </a>
        </li>
        @if($role === 'Administrator')
        <li>
          <a href="#">
            <i class="livicon" data-name="doc-portrait" data-c="#5bc0de" data-hc="#5bc0de" data-size="18" data-loop="true"></i>
            <span class="title">Content Management</span>
            <span class="fa arrow"></span>
          </a>
          <ul class="sub-menu">
            <li>
              <a href="{{ route('content.index') }}">
                <i class="fa fa-angle-double-right"></i> Content Pages
              </a>
            </li>
            <li>
              <a href="">
                <i class="fa fa-angle-double-right"></i> FAQ Questions
              </a>
            </li>
            <li>
              <a href="{{ route('socialmedia.index') }}">
                <i class="fa fa-angle-double-right"></i> Social Media Links
              </a>
            </li>
          </ul>
        </li>
        @endif
            <li>
              <a href="{{ route('image') }}">
                <i class="livicon" data-name="image" data-size="18" data-c="#EF6F6C" data-hc="#EF6F6C" data-loop="true"></i>
                <span class="title">Image Files</span>
              </a>
            </li>
            <li>
              <a href="{{ route('audio') }}">
                <i class="livicon" data-name="music" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
                <span class="title">Audio Files</span>
              </a>
            </li>
            <li>
              <a href="{{ route('video') }}">
                <i class="livicon" data-name="microphone" data-size="18" data-c="#F89A14" data-hc="#F89A14" data-loop="true"></i>
                <span class="title">Video Files</span>
              </a>
            </li>
        @if($role === 'Administrator')
        <li>
           <a href="#">
               <i class="livicon" data-name="users" data-c="#5bc0de" data-hc="#5bc0de" data-size="18" data-loop="true"></i>
               <span class="title">Users</span>
               <span class="fa arrow"></span>
           </a>
           <ul class="sub-menu">
               <li>
                   <a href="{{ route('agents.index') }}">
                       <i class="fa fa-angle-double-right"></i> Agents
                   </a>
               </li>
               <li>
                   <a href="{{ route('production.index') }}">
                       <i class="fa fa-angle-double-right"></i> Production
                   </a>
               </li>
           </ul>
        </li>
        @endif
      </ul>
      <!-- END SIDEBAR MENU -->
    </div>
  </section>
  <!-- /.sidebar -->
</aside>

