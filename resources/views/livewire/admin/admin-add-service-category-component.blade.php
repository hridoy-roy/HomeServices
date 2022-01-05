<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_02_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>Services Categories</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>/</li>
                        <li>Services Categories</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="content-central">
        <div class="content_info">
            <div class="paddings-mini">
                <div class="container">
                    <div class="row portfolioContainer">
                        <div class="col-md-8 col-md-2 profile1">
                            <div class="card">
                                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                    <h5 class="card-title">Add New Services categories</h5>
                                    <a href="{{ route('admin.add_service_category') }}" class="btn btn-primary w-100">Add Categories Servicess</a>
                                </div>
                                <div class="card-body row">
                                  
                                 <form action="{{ route('') }}" method="post">
                                    <div class="col-md-12">
                                        <label for="" class="form-label">Category Name</label>
                                        <input type="text" sclass="form-control" name="category_name" id="" placeholder="">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="" class="form-label">Category slag</label>
                                        <input type="text" sclass="form-control" name="category_slag" id="" placeholder="">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="" class="form-label">Category slag</label>
                                        <input type="file" sclass="form-control" name="category_image" id="" placeholder="">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
