
<aside>
  <div id="sidebar" class="nav-collapse ">
    <!-- sidebar menu start-->
    <ul class="sidebar-menu" id="nav-accordion">
      <h5 class="centered"><?php echo $this->session->userdata('user_data')['fullname']; ?></h5>
      <li class="mt">
        <a href="<?php echo base_url('admin');?>">
          <i class="fa fa-dashboard"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="mt">
        <a href="<?php echo base_url('admin/monthwise-expense');?>">
          <i class="fa fa-dashboard"></i>
          <span>Monthly Expenses</span>
        </a>
      </li>
      <li class="mt">
        <a href="<?php echo base_url('admin/user-list');?>"">
          <i class="fa fa-users"></i>
          <span>Users</span>
        </a>
      </li>
    </ul>
    <!-- sidebar menu end-->
  </div>
</aside>