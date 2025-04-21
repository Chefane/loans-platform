<div>
    <span class="font-weight-bold fs-3 m-3">Manage Loan Payments</span>

    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-4">
                <div class="stats-card">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4>Total Amount Paid</h4>
                        <span class="icon bg-sales"><i class="fas fa-users"></i></span>
                    </div>
                    <h1 class="mt-3 fw-bold">60</h2>
                </div>
            </div>
            <div class="col-4">
                    <div class="stats-card">
                        <div class="d-flex align-items-center justify-content-between">
                            <h4>Mpesa Payments</h4>
                            <span class="icon bg-users"><i class="fas fa-user-plus"></i></span>
                        </div>
                        <h1 class="mt-3 fw-bold">50</h2>
                    </div>
            </div>
            <div class="col-4">
                <div class="stats-card">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4>Ecocash Payments</h4>
                        <span class="icon bg-traffic"><i class="fas fa-chart-bar"></i></span>
                    </div>
                    <h1 class="mt-3 fw-bold">350</h2>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-4">
                <div class="stats-card">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4>No. Of Partially Paid</h4>
                        <span class="icon bg-sales"><i class="fas fa-users"></i></span>
                    </div>
                    <h1 class="mt-3 fw-bold">60</h2>
                </div>
            </div>
            <div class="col-4">
                    <div class="stats-card">
                        <div class="d-flex align-items-center justify-content-between">
                            <h4>No. Of Fully Paid</h4>
                            <span class="icon bg-users"><i class="fas fa-user-plus"></i></span>
                        </div>
                        <h1 class="mt-3 fw-bold">50</h2>
                    </div>
            </div>
            <div class="col-4">
                <div class="stats-card">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4>Paid On Time</h4>
                        <span class="icon bg-traffic"><i class="fas fa-chart-bar"></i></span>
                    </div>
                    <h1 class="mt-3 fw-bold">350</h2>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-4">
                <div class="stats-card">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4>No. Of Overdue Payments</h4>
                        <span class="icon bg-sales"><i class="fas fa-users"></i></span>
                    </div>
                    <h1 class="mt-3 fw-bold">60</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-3">
        <div class="d-flex justify-content-end">
            <span class="me-3">
                <select class="form-select transition ease-in-out duration-150 bg-white text-black" aria-label="Default select example">
                    <option selected>Select Status</option>
                    <option value="1">Mpesa</option>
                    <option value="2">Ecocash</option>
                  </select>
            </span>
            <span>
                <div class="input-group" style="max-width: 400px;">
                    <input type="text" 
                           class="form-control inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest focus:outline-none focus:ring-2  transition ease-in-out duration-150 bg-white text-black" 
                           id="title" 
                           style="height: 38px;"
                           placeholder="Search" 
                           wire:model="",
                           onkeydown="if(event.key === 'Enter'){@this.sms();}">
                    <span  style="height: 38px;" class="input-group-text bg-dark inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-offset-2 transition" 
                          id="search-icon">
                        <i class="bi bi-search"></i>
                    </span>
                </div>  
            </span>
        </div>   
        
        <div class="mt-3">
            <div style="max-height: 300px; overflow-y: auto;">
                <table id="example" class="table table-striped table-borderless border p-3"  style="border-collapse: separate; border-spacing: 0; border-radius: 10px; overflow: hidden; width:100%;">
                    <thead>
                        <tr>
                            <th>Borrower</th>
                            <th>Phone Number</th>
                            <th>Employement Status</th>
                            <th>Loan Amount</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="profile-container">
                                    <i class="bi bi-person-circle profile-icon"></i>
                                    <div class="profile-info">
                                        <span class="profile-name">John Doe</span>
                                        <span class="profile-number">45456445565</span>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">+26663452321</td>
                            <td class="text-center">Employed</td>
                            <td class="text-center">M61</td>
                            <td class="text-center">12 Aug 2023, 13:50</td>
                            <td class="text-center">
                                <span class="badge badge-pill p-2" style="background-color: #d4edda; color: #155724;">
                                    Fully Paid
                                </span>                                
                            </td>
                            <td>
                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </a>                                      
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">View</a></li>
                                        <li><a class="dropdown-item" href="#">Generate Receipt</a></li>
                                    </ul>
                                </div>                                
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="profile-container">
                                    <i class="bi bi-person-circle profile-icon"></i>
                                    <div class="profile-info">
                                        <span class="profile-name">John Doe</span>
                                        <span class="profile-number">45456445565</span>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">+26663452321</td>
                            <td class="text-center">Self Employed</td>
                            <td class="text-center">M61</td>
                            <td class="text-center">12 Aug 2023, 13:50</td>
                            <td class="text-center">
                                <span class="badge badge-pill p-2" style="background-color: #f8d7da; color: #721c24;">
                                    Overdue Payment
                                </span>                                   
                            </td>
                            <td class="">
                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </a>                                      
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">View</a></li>
                                        <li><a class="dropdown-item" href="#">Generate Receipt</a></li>
                                    </ul>
                                </div>                                
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="profile-container">
                                    <i class="bi bi-person-circle profile-icon"></i>
                                    <div class="profile-info">
                                        <span class="profile-name">Nosi Chefane</span>
                                        <span class="profile-number">45456445565</span>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">+26663452321</td>
                            <td class="text-center">Self Employed</td>
                            <td class="text-center">M61</td>
                            <td class="text-center">12 Aug 2023, 13:50</td>
                            <td class="text-center">
                                <span class="badge badge-pill p-2" style="background-color: #cce5ff; color: #004085;">
                                    Partial Payment
                                </span>                                                                  
                            </td>
                            <td class="">
                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </a>                                      
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">View</a></li>
                                        <li><a class="dropdown-item" href="#">Generate Receipt</a></li>
                                    </ul>
                                </div>                                
                            </td>
                        </tr>
                    <tfoot>
                        <tr>
                            <th>Borrower</th>
                            <th>Phone Number</th>
                            <th>Employment Status</th>
                            <th>Loan Amount</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
