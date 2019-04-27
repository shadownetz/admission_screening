<div class="animated fadeInUp section__content section__content--p30 ">    
<div class="container-fluid">
                <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Activate Students</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>firstname</th>
                                                <th>lastname</th>
                                                <th >field of study</th>
                                                <th class="text-right">status</th>
                                                <th>control</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for($i=0; $i < 4; $i++){
                                                    echo('<tr>
                                                    <td>0</td>
                                                    <td>fname</td>
                                                    <td>lname</td>
                                                    <td class="text-right">
                                                    field
                                                    </td>
                                                    <td class="text-right">inactive</td>
                                                    <td class="text-right">
                                                    <!-- for deactivate use
                                                    <a class="btn btn-outline-danger" href="#">deactivate</a>
                                                    -->
                                                    <a class="btn btn-outline-success" href="#">activate</a>
                                                    </td>
                                                </tr>');
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
</div>
</div>