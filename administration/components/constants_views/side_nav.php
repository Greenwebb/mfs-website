<?php

Session::init();



/*spl_autoload_register(function($classes){

  include 'includes/logic/classes/'.$classes.".php";

});


$users = new Users();
*/
?>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="dropdown sidebar-profile-dropdown">
        <a class="dropdown-toggle d-flex align-items-center justify-content-between" href="#" data-toggle="dropdown" id="profileDropdown1">
            <img src="<?=$profile?>" alt="profile" class="sidebar-profile-icon">
            <div>
                <div class="nav-profile-name">Admin(<?= $role ?? "" ?>)</div>
                <div class="nav-profile-designation">ACTIVE</div>
            </div>
        </a>
        <div class="dropdown-menu navbar-dropdown dropdown-menu-left" aria-labelledby="profileDropdown1">
            <a class="dropdown-item" href="profile.php">
                <i class="mdi mdi-account"></i> Profile
            </a>
            <a class="dropdown-item" href="/">
                <i class="mdi mdi-blur-radial"></i> Website
            </a>
            <a class="dropdown-item" href="includes/logic/logout.php">
                <i class="mdi mdi-logout"></i> Logout
            </a>
        </div>
    </div>
    <ul class="nav">
       
            <li class="nav-item">
                <div class="sidebar-title">Main</div>
                <a class="nav-link" href="index.php">
                    <i class="mdi mdi-cards-variant menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>

            <?php switch ($role_id) {
                case '1':
                    echo ('<li class="nav-item">
                    <div class="sidebar-title">Management</div>
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <i class="mdi mdi mdi-account menu-icon"></i>
                        <span class="menu-title">Clientele</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="view_borrower.php">View Borrowers</a></li>
                            <li class="nav-item"> <a class="nav-link" href="add__borrower.php">Add Borrower</a></li>
    
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
                        <i class="mdi mdi-chart-pie menu-icon"></i>
                        <span class="menu-title">Loans</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-advanced">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="view_loans.php">View All Loans</a></li>
                            <li class="nav-item"> <a class="nav-link" href="add_loan.php">Add Loans</a></li>
                            <li class="nav-item"> <a class="nav-link" href="due_loans.php">Due Loans</a></li>
                            <li class="nav-item"> <a class="nav-link" href="missed_repayments.php">Missed Repayments</a></li>
                            <li class="nav-item"> <a class="nav-link" href="loan_arrears.php">Loan Arrears</a></li>
                           
    
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                        <i class="mdi mdi-credit-card menu-icon"></i>
                        <span class="menu-title">Repayments</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="form-elements">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="view_repayments.php">View Repayments</a></li>
                            <li class="nav-item"><a class="nav-link" href="add_repayments.php">Add Repayments</a></li>
                            <li class="nav-item"><a class="nav-link" href="add_repayments.php">Add Bulk</a></li>
                            <li class="nav-item"><a class="nav-link" href="validation.php">Validation</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                        <i class="mdi mdi-folder-multiple-outline menu-icon"></i>
                        <span class="menu-title">Collateral</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="charts">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="manage_collateral.php">Manage Collateral</a></li>
                            <li class="nav-item"> <a class="nav-link" href="auction.php">Auction</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="calendar.php" aria-expanded="false">
                        <i class="mdi mdi-calendar-blank menu-icon"></i>
                        <span class="menu-title">Calender</span>
                    </a>
    
                </li>
    
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                        <i class="mdi mdi-cube menu-icon"></i>
                        <span class="menu-title">Expenses</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="icons">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="view_expenses.php">Expenses Summary</a></li>
                            <li class="nav-item"> <a class="nav-link" href="add_expenses.php">Add Expenses</a></li>
                            <li class="nav-item"> <a class="nav-link" href="manage_expenses.php">Manage Expenses</a></li>

                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#maps" aria-expanded="false" aria-controls="maps">
                        <i class="mdi mdi-file-outline menu-icon"></i>
                        <span class="menu-title">Accounts</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="maps">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="cash_flow.php">Cash Flow accumulated</a></li>
                            <li class="nav-item"> <a class="nav-link" href="balance_sheet.php">Balance Sheet</a></li>
                            <li class="nav-item"> <a class="nav-link" href="profit_loss.php">Profit/Loss</a></li>
                            <li class="nav-item"> <a class="nav-link" href="projection.php">Projection</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#form-elments" aria-expanded="false" aria-controls="form-elments">
                        <i class="mdi mdi-credit-card menu-icon"></i>
                        <span class="menu-title">Employees</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="form-elments">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="manage_employees.php">Manage Employees</a></li>
                            <li class="nav-item"><a class="nav-link" href="payroll.php">Payroll</a></li>
                            <li class="nav-item"><a class="nav-link" href="shifts.php">Shifts</a></li>
                            <li class="nav-item"><a class="nav-link" href="evaluation.php">Evaluation</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="sidebar-title">Applications</div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="email.php">
                        <i class="mdi mdi-email-open-outline menu-icon"></i>
                        <span class="menu-title">Email</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="todo.php">
                        <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                        <span class="menu-title">Todo list</span>
                    </a>
                </li>
                <li class="nav-item">
                    <div class="sidebar-title">Essentials</div>
    
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="assets.php" aria-controls="user-pages">
                        <i class="mdi mdi-office-building menu-icon"></i>
                        <span class="menu-title">Asset Management</span>
    
                    </a>
    
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="reports.php" aria-controls="user-pages">
                        <i class="mdi mdi-projector-screen menu-icon"></i>
                        <span class="menu-title">Reports</span>
    
                    </a>
    
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="website.php" aria-controls="user-pages">
                        <i class="mdi mdi-weather-cloudy menu-icon"></i>
                        <span class="menu-title">Website CMS</span>
    
                    </a>
    
                </li>
                <li class="nav-item">
                    <div class="sidebar-title">System</div>
                    <a class="nav-link" data-toggle="collapse" href="#i-basic" aria-expanded="false" aria-controls="i-basic">
                        <i class="mdi mdi mdi-account menu-icon"></i>
                        <span class="menu-title">Settings</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="i-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="profile.php">User Settings</a></li>
                            <li class="nav-item"> <a class="nav-link" href="system.php">System Settings</a></li>
    
                        </ul>
                    </div>
                </li><?php } ?>
            ');
                    break;
                case '2':
                    echo '
                    <li class="nav-item">
                    <div class="sidebar-title">Management</div>
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <i class="mdi mdi mdi-account menu-icon"></i>
                        <span class="menu-title">Clientele</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">

                            <li class="nav-item"> <a class="nav-link" href="view_borrower.php">View Borrowers</a></li>
                                
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
                        <i class="mdi mdi-chart-pie menu-icon"></i>
                        <span class="menu-title">Loans</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-advanced">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="view_loans.php">View All Loans</a></li>
                            <li class="nav-item"> <a class="nav-link" href="add_loan.php">Add Loans</a></li>
                            <li class="nav-item"> <a class="nav-link" href="due_loans.php">Due Loans</a></li>
                            <li class="nav-item"> <a class="nav-link" href="missed_repayments.php">Missed Repayments</a></li>
                            <li class="nav-item"> <a class="nav-link" href="loan_arrears.php">Loan Arrears</a></li>
                           
    
                        </ul>
                    </div>
                </li>
                    <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                        <i class="mdi mdi-credit-card menu-icon"></i>
                        <span class="menu-title">Repayments</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="form-elements">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="view_repayments.php">View Repayments</a></li>
                            <li class="nav-item"><a class="nav-link" href="add_repayments.php">Add Repayments</a></li>
                            <li class="nav-item"><a class="nav-link" href="add_repayments.php">Add Bulk</a></li>
                          
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                        <i class="mdi mdi-folder-multiple-outline menu-icon"></i>
                        <span class="menu-title">Collateral</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="charts">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="manage_collateral.php">Manage Collateral</a></li>
                            <li class="nav-item"> <a class="nav-link" href="auction.php">Auction</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="calendar.php" aria-expanded="false">
                        <i class="mdi mdi-calendar-blank menu-icon"></i>
                        <span class="menu-title">Calender</span>
                    </a>
    
                </li>
    
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                        <i class="mdi mdi-cube menu-icon"></i>
                        <span class="menu-title">Expenses</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="icons">
                        <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="manage_expenses.php">Manage Expenses</a></li>
                            <li class="nav-item"> <a class="nav-link" href="add_expenses.php">Add Expenses</a></li>
                            <li class="nav-item"> <a class="nav-link" href="view_expenses.php">View Expenses</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#maps" aria-expanded="false" aria-controls="maps">
                        <i class="mdi mdi-file-outline menu-icon"></i>
                        <span class="menu-title">Accounts</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="maps">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="cash_flow.php">Cash Flow accumulated</a></li>
                            <li class="nav-item"> <a class="nav-link" href="balance_sheet.php">Balance Sheet</a></li>
                            <li class="nav-item"> <a class="nav-link" href="profit_loss.php">Profit/Loss</a></li>
                            <li class="nav-item"> <a class="nav-link" href="projection.php">Projection</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#form-elments" aria-expanded="false" aria-controls="form-elments">
                        <i class="mdi mdi-credit-card menu-icon"></i>
                        <span class="menu-title">Employees</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="form-elments">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="manage_employees.php">Manage Oficers</a></li>
                            <li class="nav-item"><a class="nav-link" href="payroll.php">Payroll</a></li>
                            <li class="nav-item"><a class="nav-link" href="shifts.php">Shifts</a></li>
                            <li class="nav-item"><a class="nav-link" href="evaluation.php">Evaluation</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="sidebar-title">Applications</div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="email.php">
                        <i class="mdi mdi-email-open-outline menu-icon"></i>
                        <span class="menu-title">Email</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="todo.php">
                        <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                        <span class="menu-title">Todo list</span>
                    </a>
                </li>
                <li class="nav-item">
                    <div class="sidebar-title">Essentials</div>
    
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="assets.php" aria-controls="user-pages">
                        <i class="mdi mdi-office-building menu-icon"></i>
                        <span class="menu-title">Asset Management</span>
    
                    </a>
    
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="reports.php" aria-controls="user-pages">
                        <i class="mdi mdi-projector-screen menu-icon"></i>
                        <span class="menu-title">Reports</span>
    
                    </a>
    
                </li>
                
                <li class="nav-item">
                    <div class="sidebar-title">System</div>
                    <a class="nav-link" data-toggle="collapse" href="#i-basic" aria-expanded="false" aria-controls="i-basic">
                        <i class="mdi mdi mdi-account menu-icon"></i>
                        <span class="menu-title">Settings</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="i-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="profile.php">User Settings</a></li>
                            
    
                        </ul>
                    </div>
                </li>';
                    break;
                case '3':
                        echo '<li class="nav-item">
                        <div class="sidebar-title">Management</div>
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                            <i class="mdi mdi mdi-account menu-icon"></i>
                            <span class="menu-title">Clientele</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="view_borrower.php">View Borrowers</a></li>
                                <li class="nav-item"> <a class="nav-link" href="add__borrower.php">Add Borrower</a></li>
        
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
                            <i class="mdi mdi-chart-pie menu-icon"></i>
                            <span class="menu-title">Loans</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-advanced">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="view_loans.php">View All Loans</a></li>
                                <li class="nav-item"> <a class="nav-link" href="add_loan.php">Add Loans</a></li>
                                <li class="nav-item"> <a class="nav-link" href="due_loans.php">Due Loans</a></li>
                                <li class="nav-item"> <a class="nav-link" href="missed_repayments.php">Missed Repayments</a></li>
                                                             
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                            <i class="mdi mdi-credit-card menu-icon"></i>
                            <span class="menu-title">Repayments</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="form-elements">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="view_repayments.php">View Repayments</a></li>
                               
                                
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                            <i class="mdi mdi-folder-multiple-outline menu-icon"></i>
                            <span class="menu-title">Collateral</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="charts">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="manage_collateral.php">Manage Collateral</a></li>
                                <li class="nav-item"> <a class="nav-link" href="auction.php">Auction</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                    <div class="sidebar-title">System</div>
                    <a class="nav-link" data-toggle="collapse" href="#i-basic" aria-expanded="false" aria-controls="i-basic">
                        <i class="mdi mdi mdi-account menu-icon"></i>
                        <span class="menu-title">Settings</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="i-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="profile.php">User Settings</a></li>
                            
    
                        </ul>
                    </div>
                </li>';
                        break;
                case '4':
                    echo '<li class="nav-item">
                    <div class="sidebar-title">Management</div>
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <i class="mdi mdi mdi-account menu-icon"></i>
                        <span class="menu-title">Clientele</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="view_borrower.php">View Borrowers</a></li>
                            <li class="nav-item"> <a class="nav-link" href="add__borrower.php">Add Borrower</a></li>
    
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
                        <i class="mdi mdi-chart-pie menu-icon"></i>
                        <span class="menu-title">Loans</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-advanced">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="view_loans.php">View All Loans</a></li>
                            <li class="nav-item"> <a class="nav-link" href="add_loan.php">Add Loans</a></li>
                            <li class="nav-item"> <a class="nav-link" href="due_loans.php">Due Loans</a></li>
                            <li class="nav-item"> <a class="nav-link" href="missed_repayments.php">Missed Repayments</a></li>
                            <li class="nav-item"> <a class="nav-link" href="loan_arrears.php">Loan Arrears</a></li>
                            
    
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                        <i class="mdi mdi-credit-card menu-icon"></i>
                        <span class="menu-title">Repayments</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="form-elements">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="view_repayments.php">View Repayments</a></li>
                            <li class="nav-item"><a class="nav-link" href="add_repayments.php">Add Repayments</a></li>
                            <li class="nav-item"><a class="nav-link" href="add_repayments.php">Add Bulk</a></li>
                          
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                        <i class="mdi mdi-folder-multiple-outline menu-icon"></i>
                        <span class="menu-title">Collateral</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="charts">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="manage_collateral.php">Manage Collateral</a></li>
                            <li class="nav-item"> <a class="nav-link" href="auction.php">Auction</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="sidebar-title">System</div>
                    <a class="nav-link" data-toggle="collapse" href="#i-basic" aria-expanded="false" aria-controls="i-basic">
                        <i class="mdi mdi mdi-account menu-icon"></i>
                        <span class="menu-title">Settings</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="i-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="profile.php">User Settings</a></li>
                            
    
                        </ul>
                    </div>
                </li>';
                        break;
                case '5':
                         echo '<li class="nav-item">
                         <div class="sidebar-title">Management</div>
                         <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                             <i class="mdi mdi mdi-account menu-icon"></i>
                             <span class="menu-title">Clientele</span>
                             <i class="menu-arrow"></i>
                         </a>
                         <div class="collapse" id="ui-basic">
                             <ul class="nav flex-column sub-menu">
                                 <li class="nav-item"> <a class="nav-link" href="view_borrower.php">View Borrowers</a></li>
                                 <li class="nav-item"> <a class="nav-link" href="add__borrower.php">Add Borrower</a></li>
         
                             </ul>
                         </div>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
                             <i class="mdi mdi-chart-pie menu-icon"></i>
                             <span class="menu-title">Loans</span>
                             <i class="menu-arrow"></i>
                         </a>
                         <div class="collapse" id="ui-advanced">
                             <ul class="nav flex-column sub-menu">
                                 <li class="nav-item"> <a class="nav-link" href="view_loans.php">View All Loans</a></li>
                                 <li class="nav-item"> <a class="nav-link" href="add_loan.php">Add Loans</a></li>
                                 <li class="nav-item"> <a class="nav-link" href="due_loans.php">Due Loans</a></li>
                                 <li class="nav-item"> <a class="nav-link" href="missed_repayments.php">Missed Repayments</a></li>
                                 <li class="nav-item"> <a class="nav-link" href="loan_arrears.php">Loan Arrears</a></li>
                                
         
                             </ul>
                         </div>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                             <i class="mdi mdi-credit-card menu-icon"></i>
                             <span class="menu-title">Repayments</span>
                             <i class="menu-arrow"></i>
                         </a>
                         <div class="collapse" id="form-elements">
                             <ul class="nav flex-column sub-menu">
                                 <li class="nav-item"><a class="nav-link" href="view_repayments.php">View Repayments</a></li>
                                 <li class="nav-item"><a class="nav-link" href="add_repayments.php">Add Repayments</a></li>
                                 <li class="nav-item"><a class="nav-link" href="add_repayments.php">Add Bulk</a></li>
                                 <!--<li class="nav-item"><a class="nav-link" href="validation.php">Validation</a></li>-->
                             </ul>
                         </div>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                             <i class="mdi mdi-folder-multiple-outline menu-icon"></i>
                             <span class="menu-title">Collateral</span>
                             <i class="menu-arrow"></i>
                         </a>
                         <div class="collapse" id="charts">
                             <ul class="nav flex-column sub-menu">
                                 <li class="nav-item"> <a class="nav-link" href="manage_collateral.php">Manage Collateral</a></li>
                                 <li class="nav-item"> <a class="nav-link" href="auction.php">Auction</a></li>
                             </ul>
                         </div>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="calendar.php" aria-expanded="false">
                             <i class="mdi mdi-calendar-blank menu-icon"></i>
                             <span class="menu-title">Calender</span>
                         </a>
         
                     </li>
         
                     <li class="nav-item">
                         <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                             <i class="mdi mdi-cube menu-icon"></i>
                             <span class="menu-title">Expenses</span>
                             <i class="menu-arrow"></i>
                         </a>
                         <div class="collapse" id="icons">
                             <ul class="nav flex-column sub-menu">
                                 <li class="nav-item"> <a class="nav-link" href="add_expenses.php">Add Expenses</a></li>
                                 <li class="nav-item"> <a class="nav-link" href="view_expenses.php">View Expenses</a></li>
                             </ul>
                         </div>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" data-toggle="collapse" href="#maps" aria-expanded="false" aria-controls="maps">
                             <i class="mdi mdi-file-outline menu-icon"></i>
                             <span class="menu-title">Accounts</span>
                             <i class="menu-arrow"></i>
                         </a>
                         <div class="collapse" id="maps">
                             <ul class="nav flex-column sub-menu">
                                 <li class="nav-item"> <a class="nav-link" href="cash_flow.php">Cash Flow accumulated</a></li>
                                 <li class="nav-item"> <a class="nav-link" href="balance_sheet.php">Balance Sheet</a></li>
                                 <li class="nav-item"> <a class="nav-link" href="profit_loss.php">Profit/Loss</a></li>
                                 <li class="nav-item"> <a class="nav-link" href="projection.php">Projection</a></li>
                             </ul>
                         </div>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" data-toggle="collapse" href="#form-elments" aria-expanded="false" aria-controls="form-elments">
                             <i class="mdi mdi-credit-card menu-icon"></i>
                             <span class="menu-title">Employees</span>
                             <i class="menu-arrow"></i>
                         </a>
                         <div class="collapse" id="form-elments">
                             <ul class="nav flex-column sub-menu">
                                 <li class="nav-item"><a class="nav-link" href="manage_employees.php">Manage Oficers</a></li>
                                 <li class="nav-item"><a class="nav-link" href="payroll.php">Payroll</a></li>
                                 <li class="nav-item"><a class="nav-link" href="shifts.php">Shifts</a></li>
                                 <li class="nav-item"><a class="nav-link" href="evaluation.php">Evaluation</a></li>
                             </ul>
                         </div>
                     </li>
                     <li class="nav-item">
                         <div class="sidebar-title">Applications</div>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="email.php">
                             <i class="mdi mdi-email-open-outline menu-icon"></i>
                             <span class="menu-title">Email</span>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="todo.php">
                             <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                             <span class="menu-title">Todo list</span>
                         </a>
                     </li>
                     <li class="nav-item">
                         <div class="sidebar-title">Essentials</div>
         
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="assets.php" aria-controls="user-pages">
                             <i class="mdi mdi-office-building menu-icon"></i>
                             <span class="menu-title">Asset Management</span>
         
                         </a>
         
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="reports.php" aria-controls="user-pages">
                             <i class="mdi mdi-projector-screen menu-icon"></i>
                             <span class="menu-title">Reports</span>
         
                         </a>
         
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="website.php" aria-controls="user-pages">
                             <i class="mdi mdi-weather-cloudy menu-icon"></i>
                             <span class="menu-title">Website CMS</span>
         
                         </a>
         
                     </li>
                     <li class="nav-item">
                         <div class="sidebar-title">System</div>
                         <a class="nav-link" data-toggle="collapse" href="#i-basic" aria-expanded="false" aria-controls="i-basic">
                             <i class="mdi mdi mdi-account menu-icon"></i>
                             <span class="menu-title">Settings</span>
                             <i class="menu-arrow"></i>
                         </a>
                         <div class="collapse" id="i-basic">
                             <ul class="nav flex-column sub-menu">
                                 <li class="nav-item"> <a class="nav-link" href="profile.php">User Settings</a></li>
         
                             </ul>
                         </div>
                     </li>';
                        break;
                case '6':
                    echo '<li class="nav-item">
                    <div class="sidebar-title">Management</div>
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <i class="mdi mdi mdi-account menu-icon"></i>
                        <span class="menu-title">Clientele</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="view_borrower.php">View Borrowers</a></li>
                            <li class="nav-item"> <a class="nav-link" href="add__borrower.php">Add Borrower</a></li>
    
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
                        <i class="mdi mdi-chart-pie menu-icon"></i>
                        <span class="menu-title">Loans</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-advanced">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="view_loans.php">View All Loans</a></li>
                            <li class="nav-item"> <a class="nav-link" href="add_loan.php">Add Loans</a></li>
                            <li class="nav-item"> <a class="nav-link" href="due_loans.php">Due Loans</a></li>
                            <li class="nav-item"> <a class="nav-link" href="missed_repayments.php">Missed Repayments</a></li>
                                                         
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                        <i class="mdi mdi-credit-card menu-icon"></i>
                        <span class="menu-title">Repayments</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="form-elements">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="view_repayments.php">View Repayments</a></li>
                           
                            
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                        <i class="mdi mdi-folder-multiple-outline menu-icon"></i>
                        <span class="menu-title">Collateral</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="charts">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="manage_collateral.php">Manage Collateral</a></li>
                            <li class="nav-item"> <a class="nav-link" href="auction.php">Auction</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                <div class="sidebar-title">System</div>
                <a class="nav-link" data-toggle="collapse" href="#i-basic" aria-expanded="false" aria-controls="i-basic">
                    <i class="mdi mdi mdi-account menu-icon"></i>
                    <span class="menu-title">Settings</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="i-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="profile.php">User Settings</a></li>
                        

                    </ul>
                </div>
            </li>';
                        break;
                default:
                    echo '<li class="nav-item">
                    <a class="nav-link" href="includes/logic/logout.php" aria-controls="error-pages">
                        <i class="mdi mdi-logout menu-icon"></i>
                        <span class="menu-title">logout</span>
        
                    </a>
        
                </li>';
                    break;
            }  ?>

<li class="nav-item">
                <a class="nav-link" href="includes/logic/logout.php" aria-controls="error-pages">
                    <i class="mdi mdi-logout menu-icon"></i>
                    <span class="menu-title">logout</span>
    
                </a>
    
            </li>   
        <li class="nav-item">
            <div class="sidebar-title">Help</div>
            <a class="nav-link" href="documentation.php" target="_blank">
                <i class="mdi mdi-file-document menu-icon"></i>
                <span class="menu-title">Documentation</span>
            </a>
        </li>
    </ul>

    <div class="designer-info">
        Designed by: <a href="greenwebb.co.zm" target="_blank"><t style="color: #26bf26;">Green</t>webb</a>
    </div>
</nav>