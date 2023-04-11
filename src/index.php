<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Material Design for Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <!-- MDB -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- Custom styles -->
  <link rel="stylesheet" href="./CSS/style.css" />
  <!-- jQuery CDN  -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>

<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">

                    <div class="card">
                        <div class="card-body p-5">

                            <form class="d-flex justify-content-center align-items-center mb-4">
                                <div class="form-outline flex-fill">
                                    <input type="text" id="add_input" class="form-control" placeholder="New Task ..."/>
                                </div>
                                <a class="btn btn-info ms-2" id="add">Add</a>
                            </form>

                            <!-- Tabs navs -->
                            <ul class="nav nav-tabs mb-4 pb-2" id="ex1" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="ex1-tab-1" data-mdb-toggle="tab" 
                                    href="#ex1-tabs-1" role="tab" aria-controls="ex1-tabs-1" aria-selected="true" onclick="display()">All</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="ex1-tab-2" data-mdb-toggle="tab" href="#ex1-tabs-2" role="tab" aria-controls="ex1-tabs-2" aria-selected="false" onclick="active()">Active</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="ex1-tab-3" data-mdb-toggle="tab" href="#ex1-tabs-3" role="tab" aria-controls="ex1-tabs-3" aria-selected="false" onclick="completed()">Completed</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="ex1-tab-4" data-mdb-toggle="tab" href="#ex1-tabs-4" role="tab" aria-controls="ex1-tabs-3" aria-selected="false" onclick="clear_complete()">Clear Completed</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <div>
                                        Date: <input class="m-2" type="date" id="pick_date" date_format="yyyy-mm-dd" onclick="date()">
                                    </div>
                                </li>
                            </ul>
                            <!-- Tabs navs -->

                            <!-- Tabs content -->
                            <div class="tab-content" id="ex1-content">
                                <div class="tab-pane fade show active" id="ex1-tabs-1" role="tabpanel" aria-labelledby="ex1-tab-1">
                                    <ul class="list-group mb-0" id="add_todo">

                                    </ul>
                                </div>  
                            </div>
                            <!-- Tabs content -->

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</body>

<script src="./JS/script.js"></script>
</html>