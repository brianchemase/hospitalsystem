<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"> 
                    <span>Main Menu</span>
                </li>
                <li class="active"> 
                    <a href="{{route('ReceptionHome')}}"><i class="fas fa-th-large"></i> <span>Dashboard</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-user-plus"></i> <span> Patients Visits</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{URL::to('/reception/patients')}}">Register Patient</a></li>
                        <li><a href="{{route('PatientsList')}}">Patients List</a></li>
                        
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-user-md"></i> <span> Available Doctors</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="#">Register Doctors</a></li>
                        <li><a href="#">Doctors List</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-building"></i> <span> Labs</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="add-department.html">Department Add</a></li>
                        <li><a href="departments.html">Department List</a></li>
                    </ul>
                </li>
                <li> 
                    <a href="#"><i class="fas fa-hospital"></i> <span>Phamasist</span></a>
                </li>
                

                <li class="menu-title"> 
                    <span>Management</span>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fas fa-file-invoice-dollar"></i> <span> Accounts</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="fees-collections.html">Fees Collection</a></li>
                        <li><a href="expenses.html">Expenses</a></li>
                        <li><a href="salary.html">Salary</a></li>
                        <li><a href="add-fees-collection.html">Add Fees</a></li>
                        <li><a href="add-expenses.html">Add Expenses</a></li>
                        <li><a href="add-salary.html">Add Salary</a></li>
                    </ul>
                </li>
                <li> 
                    <a href="holiday.html"><i class="fas fa-holly-berry"></i> <span>Holiday</span></a>
                </li>
                

                <li class="menu-title"> 
                    <span>Actions</span>
                </li>
                <li> 
                    <a href="holiday.html"><i class="fas fa-holly-berry"></i> <span>History Logs</span></a>
                </li>
                <li> 
                    <a href="holiday.html"><i class="fas fa-key"></i> <span>Change Password</span></a>
                </li>
                <li> 
                    <a href="holiday.html"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a>
                </li>

            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->