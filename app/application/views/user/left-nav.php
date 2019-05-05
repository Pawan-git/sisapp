
<aside>
  <div id="sidebar" class="nav-collapse ">
    <!-- sidebar menu start-->
    <ul class="sidebar-menu" id="nav-accordion">
      <h5 class="centered"><?php echo $this->session->userdata('user_data')['fullname']; ?></h5>
      <li class="mt">
        <a href="<?php echo base_url('user');?>">
          <i class="fa fa-dashboard"></i>
          <span>Monthly Expenses</span>
        </a>
      </li>
      <li class="mt">
        <a href="<?php echo base_url('user/change-password');?>"">
        <i class="fa fa-users"></i>
        <span>Update Password</span>
        </a>
      </li>
    </ul>
    <!-- sidebar menu end-->
  </div>
</aside>