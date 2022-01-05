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
                        <div class="col-md-12 profile1">

                            <div class="card text-left">
                                <h4 class="card-title">All Services categories</h4>
                                <a href="{{ route('admin.service_category') }}" class="btn btn-primary w-100">View Categories Servicess</a>
                              <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Slug</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($scategories as $scategory)
                                            <tr>
                                                <td>{{ $scategory->id }}</td>
                                                <td>
                                                    <img src="{{ asset('images\categories') }}/{{ $scategory->image }}" width="60" alt="" srcset="">
                                                </td>
                                                <td>{{ $scategory->name }}</td>
                                                <td>{{ $scategory->slug }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                              </div>
                            </div>
                            
                            {{ $scategories->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
