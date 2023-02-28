<div class="tab-pane h-100 show active" id="pills-contact" role="tabpanel" aria-labelledby="pills-contacts-tab">    
    <div class="px-4">
        <div class="user-chat-nav float-end">
            <div data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add Contact">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-link text-decoration-none text-muted fs-18 py-0" data-bs-toggle="modal" data-bs-target="#addContact-exampleModal">
                    <i class="ri-user-add-line"></i>
                </button>
            </div>
        </div>
        <h4 class="mb-4">Contacts</h4>

        <!-- Start Add contact Modal -->
        <div class="modal fade" id="addContact-exampleModal" tabindex="-1" role="dialog" aria-labelledby="addContact-exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title fs-16" id="addContact-exampleModalLabel">Add Contact</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body px-4">
                        <form>
                            <div class="mb-3">
                                <label for="addcontactemail-input" class="form-label">Email</label>
                                <input type="email" class="form-control" id="addcontactemail-input" placeholder="Enter Email">
                            </div>
                            <div class="mb-3">
                                <label for="addcontact-invitemessage-input" class="form-label">Invatation Message</label>
                                <textarea class="form-control" id="addcontact-invitemessage-input" rows="3" placeholder="Enter Message"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Invite Contact</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Add contact Modal -->

        <div class="search-box chat-search-box">
            <div class="input-group bg-light  input-group-lg rounded-3">
                <div class="input-group-prepend">
                    <button class="btn btn-link text-decoration-none text-muted pe-1 ps-3" type="button">
                        <i class="ri-search-line search-icon fs-18"></i>
                    </button>
                </div>
                <input type="text" class="form-control bg-light" placeholder="Search users..">
            </div>
        </div>
        <!-- End search-box -->
    </div>
    <!-- end px-4 -->

    <!-- Start contact lists -->
    <div class="px-4 contact-group-list wa-scroll">

        <?php if ( !empty($result) ) {?>
        <ul class="list-unstyled contact-list">
            <?php foreach ($result as $key => $value): ?>
            <li>
                <div class="d-flex align-items-center">
                    <div class="flex-1">
                        <h5 class="fs-14 m-0"><?php _e( str_replace(' ', '', isset($value->name)?$value->name:$value->number) )?></h5>
                    </div>
                    <div class="dropdown">
                        <a href="#" class="text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ri-more-2-fill"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Share <i class="ri-share-line float-end text-muted"></i></a>
                            <a class="dropdown-item" href="#">Block <i class="ri-forbid-line float-end text-muted"></i></a>
                            <a class="dropdown-item" href="#">Remove <i class="ri-delete-bin-line float-end text-muted"></i></a>
                        </div>
                    </div>
                </div>
            </li>
            <?php endforeach ?>
        </ul>
        <?php }?>

        <div class="mt-3">
            <div class="px-3 fw-6 text-primary">
                C
            </div>

            <ul class="list-unstyled contact-list">
                <li>
                    <div class="d-flex align-items-center">
                        <div class="flex-1">
                            <h5 class="fs-14 m-0">Craig Smiley</h5>
                        </div>                        
                        <div class="dropdown">
                            <a href="#" class="text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ri-more-2-fill"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Share <i class="ri-share-line float-end text-muted"></i></a>
                                <a class="dropdown-item" href="#">Block <i class="ri-forbid-line float-end text-muted"></i></a>
                                <a class="dropdown-item" href="#">Remove <i class="ri-delete-bin-line float-end text-muted"></i></a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!-- end contact list C -->

        <div class="mt-3">
            <div class="px-3 fw-6 text-primary">
                D
            </div>

            <ul class="list-unstyled contact-list">
                <li>
                    <div class="d-flex align-items-center">
                        <div class="flex-1">
                            <h5 class="fs-14 m-0">Daniel Clay</h5>  
                        </div>
                        <div class="dropdown">
                            <a href="#" class="text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ri-more-2-fill"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Share <i class="ri-share-line float-end text-muted"></i></a>
                                <a class="dropdown-item" href="#">Block <i class="ri-forbid-line float-end text-muted"></i></a>
                                <a class="dropdown-item" href="#">Remove <i class="ri-delete-bin-line float-end text-muted"></i></a>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="d-flex align-items-center">
                        <div class="flex-1">
                            <h5 class="fs-14 m-0">Doris Brown</h5>
                        </div>

                        <div class="dropdown">
                            <a href="#" class="text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ri-more-2-fill"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Share <i class="ri-share-line float-end text-muted"></i></a>
                                <a class="dropdown-item" href="#">Block <i class="ri-forbid-line float-end text-muted"></i></a>
                                <a class="dropdown-item" href="#">Remove <i class="ri-delete-bin-line float-end text-muted"></i></a>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
        <!-- end contact list D -->

        <div class="mt-3">
            <div class="px-3 fw-6 text-primary">
                I
            </div>

            <ul class="list-unstyled contact-list">

                <li>
                    <div class="d-flex align-items-center">
                        <div class="flex-1">
                            <h5 class="fs-14 m-0">Iris Wells</h5>
                        </div>                        
                        <div class="dropdown">
                            <a href="#" class="text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ri-more-2-fill"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Share <i class="ri-share-line float-end text-muted"></i></a>
                                <a class="dropdown-item" href="#">Block <i class="ri-forbid-line float-end text-muted"></i></a>
                                <a class="dropdown-item" href="#">Remove <i class="ri-delete-bin-line float-end text-muted"></i></a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!-- end contact list I -->

        <div class="mt-3">
            <div class="px-3 fw-6 text-primary">
                J
            </div>

            <ul class="list-unstyled contact-list">
                <li>
                    <div class="d-flex align-items-center">
                        <div class="flex-1">
                            <h5 class="fs-14 m-0">Juan Flakes</h5>
                        </div>                        
                        <div class="dropdown">
                            <a href="#" class="text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ri-more-2-fill"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Share <i class="ri-share-line float-end text-muted"></i></a>
                                <a class="dropdown-item" href="#">Block <i class="ri-forbid-line float-end text-muted"></i></a>
                                <a class="dropdown-item" href="#">Remove <i class="ri-delete-bin-line float-end text-muted"></i></a>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="d-flex align-items-center">
                        <div class="flex-1">
                            <h5 class="fs-14 m-0">John Hall</h5>
                        </div>                                                
                        <div class="dropdown">
                            <a href="#" class="text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ri-more-2-fill"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Share <i class="ri-share-line float-end text-muted"></i></a>
                                <a class="dropdown-item" href="#">Block <i class="ri-forbid-line float-end text-muted"></i></a>
                                <a class="dropdown-item" href="#">Remove <i class="ri-delete-bin-line float-end text-muted"></i></a>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="d-flex align-items-center">
                        <div class="flex-1">
                            <h5 class="fs-14 m-0">Joy Southern</h5>
                        </div>                        
                        <div class="dropdown">
                            <a href="#" class="text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ri-more-2-fill"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Share <i class="ri-share-line float-end text-muted"></i></a>
                                <a class="dropdown-item" href="#">Block <i class="ri-forbid-line float-end text-muted"></i></a>
                                <a class="dropdown-item" href="#">Remove <i class="ri-delete-bin-line float-end text-muted"></i></a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!-- end contact list J -->

        <div class="mt-3">
            <div class="px-3 fw-6 text-primary">
                M
            </div>

            <ul class="list-unstyled contact-list">
                <li>
                    <div class="d-flex align-items-center">
                        <div class="flex-1">
                            <h5 class="fs-14 m-0">Mary Farmer</h5>
                        </div>                        
                        <div class="dropdown">
                            <a href="#" class="text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ri-more-2-fill"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Share <i class="ri-share-line float-end text-muted"></i></a>
                                <a class="dropdown-item" href="#">Block <i class="ri-forbid-line float-end text-muted"></i></a>
                                <a class="dropdown-item" href="#">Remove <i class="ri-delete-bin-line float-end text-muted"></i></a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="d-flex align-items-center">
                        <div class="flex-1">
                            <h5 class="fs-14 m-0">Mark Messer</h5>
                        </div>                        
                        <div class="dropdown">
                            <a href="#" class="text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ri-more-2-fill"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Share <i class="ri-share-line float-end text-muted"></i></a>
                                <a class="dropdown-item" href="#">Block <i class="ri-forbid-line float-end text-muted"></i></a>
                                <a class="dropdown-item" href="#">Remove <i class="ri-delete-bin-line float-end text-muted"></i></a>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="d-flex align-items-center">
                        <div class="flex-1">
                            <h5 class="fs-14 m-0">Michael Hinton</h5>
                        </div>

                        <div class="dropdown">
                            <a href="#" class="text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ri-more-2-fill"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Share <i class="ri-share-line float-end text-muted"></i></a>
                                <a class="dropdown-item" href="#">Block <i class="ri-forbid-line float-end text-muted"></i></a>
                                <a class="dropdown-item" href="#">Remove <i class="ri-delete-bin-line float-end text-muted"></i></a>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
        <!-- end contact list M -->

        <div class="mt-3">
            <div class="px-3 fw-6 text-primary">
                O
            </div>

            <ul class="list-unstyled contact-list">
                <li>
                    <div class="d-flex align-items-center">
                        <div class="flex-1">
                            <h5 class="fs-14 m-0">Ossie Wilson</h5>
                        </div>                        
                        <div class="dropdown">
                            <a href="#" class="text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ri-more-2-fill"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Share <i class="ri-share-line float-end text-muted"></i></a>
                                <a class="dropdown-item" href="#">Block <i class="ri-forbid-line float-end text-muted"></i></a>
                                <a class="dropdown-item" href="#">Remove <i class="ri-delete-bin-line float-end text-muted"></i></a>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
        <!-- end contact list O -->

        <div class="mt-3">
            <div class="px-3 fw-6 text-primary">
                P
            </div>

            <ul class="list-unstyled contact-list">
                <li>
                    <div class="d-flex align-items-center">
                        <div class="flex-1">
                            <h5 class="fs-14 m-0">Phillis Griffin</h5>
                        </div>

                        <div class="dropdown">
                            <a href="#" class="text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ri-more-2-fill"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Share <i class="ri-share-line float-end text-muted"></i></a>
                                <a class="dropdown-item" href="#">Block <i class="ri-forbid-line float-end text-muted"></i></a>
                                <a class="dropdown-item" href="#">Remove <i class="ri-delete-bin-line float-end text-muted"></i></a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="d-flex align-items-center">
                        <div class="flex-1">
                            <h5 class="fs-14 m-0">Paul Haynes</h5>
                        </div>

                        <div class="dropdown">
                            <a href="#" class="text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ri-more-2-fill"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Share <i class="ri-share-line float-end text-muted"></i></a>
                                <a class="dropdown-item" href="#">Block <i class="ri-forbid-line float-end text-muted"></i></a>
                                <a class="dropdown-item" href="#">Remove <i class="ri-delete-bin-line float-end text-muted"></i></a>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
        <!-- end contact list P -->

        <div class="mt-3">
            <div class="px-3 fw-6 text-primary">
                R
            </div>

            <ul class="list-unstyled contact-list">
                <li>
                    <div class="d-flex align-items-center">
                        <div class="flex-1">
                            <h5 class="fs-14 m-0">Rocky Jackson</h5>
                        </div>

                        <div class="dropdown">
                            <a href="#" class="text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ri-more-2-fill"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Share <i class="ri-share-line float-end text-muted"></i></a>
                                <a class="dropdown-item" href="#">Block <i class="ri-forbid-line float-end text-muted"></i></a>
                                <a class="dropdown-item" href="#">Remove <i class="ri-delete-bin-line float-end text-muted"></i></a>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
        <!-- end contact list R -->

        <div class="mt-3">
            <div class="px-3 fw-6 text-primary">
                S
            </div>

            <ul class="list-unstyled contact-list">
                <li>
                    <div class="d-flex align-items-center">
                        <div class="flex-1">
                            <h5 class="fs-14 m-0">Sara Muller</h5>
                        </div>

                        <div class="dropdown">
                            <a href="#" class="text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ri-more-2-fill"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Share <i class="ri-share-line float-end text-muted"></i></a>
                                <a class="dropdown-item" href="#">Block <i class="ri-forbid-line float-end text-muted"></i></a>
                                <a class="dropdown-item" href="#">Remove <i class="ri-delete-bin-line float-end text-muted"></i></a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="d-flex align-items-center">
                        <div class="flex-1">
                            <h5 class="fs-14 m-0">Simon Velez</h5>
                        </div>

                        <div class="dropdown">
                            <a href="#" class="text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ri-more-2-fill"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Share <i class="ri-share-line float-end text-muted"></i></a>
                                <a class="dropdown-item" href="#">Block <i class="ri-forbid-line float-end text-muted"></i></a>
                                <a class="dropdown-item" href="#">Remove <i class="ri-delete-bin-line float-end text-muted"></i></a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="d-flex align-items-center">
                        <div class="flex-1">
                            <h5 class="fs-14 m-0">Steve Walker</h5>
                        </div>

                        <div class="dropdown">
                            <a href="#" class="text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ri-more-2-fill"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Share <i class="ri-share-line float-end text-muted"></i></a>
                                <a class="dropdown-item" href="#">Block <i class="ri-forbid-line float-end text-muted"></i></a>
                                <a class="dropdown-item" href="#">Remove <i class="ri-delete-bin-line float-end text-muted"></i></a>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
        <!-- end contact list S -->
    </div>
    <!-- end contact lists -->
</div>