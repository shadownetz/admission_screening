<!-- MAIN CONTENT-->
<div class="main-content col-md-12 test-content-blk"  id="start-block">
    <div class="animated fadeInUp section__content profile">
        <div class="container-fluid">
            <form role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
                <div class="row" style="max-height:100px">
                    <!-- Content 1 -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Question
                                    <small>
                                        <span class="badge badge-success float-right mt-1">1</span>
                                    </small>
                                </strong>
                            </div>
                            <div class="card-body">
                                <p class="card-text" style="line-height:40px">
                                    Some quick example text to build on the card title and make up the bulk of the card's
                                    content.
                                    Some quick example text to build on the card title and make up the bulk of the card's
                                    content.
                                    Some quick example text to build on the card title and make up the bulk of the card's
                                    content.
                                </p>
                                <button type="submit" class="btn btn-warning" name='prev'>
                                    <i class="fa fa-hand-o-left"></i>&nbsp;Prev
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- End of Content 1 -->

                    <!-- Content 2 -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Select Answer
                                </strong>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    <ul style="list-style-type: upper-alpha;padding:20px;line-height:50px">
                                    <li>
                                        <input type="radio" value="" name="opt-1">
                                        <span>Option One</span>
                                    </li>
                                    <li>
                                        <input type="radio" value="" name="opt-1">
                                        <span>Option Two</span>
                                    </li>
                                    <li>
                                        <input type="radio" value="" name="opt-1">
                                        <span>Option Three</span>
                                    </li>
                                    <li>
                                        <input type="radio" value="" name="opt-1">
                                        <span>Option Four</span>
                                    </li>
                                    </ul>
                                </p>
                                <button type="submit" class="btn btn-success" name='next'>
                                    Next&nbsp;<i class="fa fa-hand-o-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Content 2 -->
        </div>
        </form>
    </div>
</div>
</div>
<!-- END MAIN CONTENT--> 