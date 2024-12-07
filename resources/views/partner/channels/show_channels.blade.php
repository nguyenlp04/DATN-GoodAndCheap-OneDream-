@extends('layouts.client_layout')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css">
<main class="container mb-5">

    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url("/") }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">My Channel</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

        <div class="page-content">
            <div class="container">
                <div class="row d-flex justify-content-Start">
                    <div class="col col-md-9 col-lg-7 col-xl-6">
                        <div style="width:  fit-content;min-width:400px; ">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        @if ($channels->image_channel)
                                        <img src="{{ asset($channels->image_channel) }}"
                                            alt="{{ $channels->image_channel }}" class="img-fluid" style="width: 120px;  border-radius: 10px;">
                                        @else
                                        <img src="https://cdnphoto.dantri.com.vn/lWbNf1jAm5A1aQriE5UO0SAuuYg=/2024/01/15/co-gai-xinh-dep2-edited-edited-1705310658178.jpeg"
                                            alt="Generic placeholder image" class="img-fluid" style="width: 120px;  border-radius: 10px;">
                                        @endif
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1">{{ $channels->name_channel }}</h5>

                                        <p style="color: #ff0000;"><i class="fa-solid fa-handshake" style="color: #FFD43B;"></i>
                                            Trusted partners receive the protection of the floor
                                        </p>
                                        <div class="d-flex justify-content-start rounded-3 p-2 mb-md-2 bg-body-tertiary  " style="width: fit-content">
                                            <div class="mx-3">
                                                <p class="small text-muted "> <i class="fa-solid fa-location-dot" style="color: #74C0FC;"></i> {{ $channels->address }} </p>
                                                <p class="small text-muted"><i class="fa-solid fa-clock" style="color: #74C0FC;"></i> {{ $channels->created_at->format('d-m-Y') }}</p>
                                                {{-- <p class="small text-muted "><i class="fa-solid fa-clipboard-check" style="color: #74C0FC;"></i> 56</p> --}}

                                            </div>
                                            <div>
                                                <p class="small text-muted "><i class="fa-solid fa-users" style="color: #74C0FC;"></i> {{ $channels->followers_count }} </p>
                                                <p class="small text-muted "> <i class="fa-solid fa-clipboard-check" style="color: #74C0FC;"></i> {{ $NewsCount }} </p>

                                            </div>


                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if(isset(auth()->user()->user_id))
                    @if(!(auth()->user()->user_id == $channels->user_id))
                    <div class="col col-md-9 col-lg-7 col-xl-6 d-flex justify-content-end">
                        @if ($isFollowed)
                        <form id="unfollow-form" action="{{ route('unfollow.channel', $channels->channel_id) }}" method="POST">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-rounded mt-md-3 mx-md-3" style="height: 50px"><i class="fa-solid fa-user-minus me-2"></i>Unfollow</button>
                        </form>
                        @else
                        <form id="follow-form" action="{{ route('follow.channel', $channels->channel_id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary btn-rounded mt-md-3 mx-md-3" style="height: 50px"><i class="fa-solid fa-user-plus"></i> Follow</button>
                        </form>
                        @endif
                    </div>
                    @endif
                    @endif
                </div>



                <div class="row">
                    <div class="col-lg-9">
                        <div class="toolbox">
                            <div class="toolbox-left">
                                <div class="toolbox-info">
                                    Showing <span>9 of 56</span> Products
                                </div><!-- End .toolbox-info -->
                            </div><!-- End .toolbox-left -->

                            <div class="toolbox-right" style=" visibility: hidden;">
                                <div class="toolbox-sort">
                                    <div class="select-custom">
                                        <select name="sortby" id="sortby" class="form-control">
                                            <option value="date">Date</option>
                                        </select>
                                    </div>
                                </div><!-- End .toolbox-sort -->

                            </div><!-- End .toolbox-right -->
                        </div><!-- End .toolbox -->

                        <div class="products mb-3">
                            @foreach ($sale_news as $sale_new)
                            <div class="product product-list">
                                <div class="row">
                                    <div class="col-6 col-lg-3">
                                        <figure class="product-media">
                                            @if($sale_new->vip_package_id != null)
                                            <span class="product-label label-new">On top</span>
                                            @endif
                                            <img src="{{ asset($sale_new->firstImage->image_name) }}" alt="Product image1" class="product-image">
                                        </figure>
                                    </div>
                                    <div class="col-6 col-lg-3 order-lg-last">
                                        <div class="product-list-action">
                                            <div class="product-price">
                                                <h4 class="text-primary">${{ $sale_new->price }}</h4>
                                            </div>
                                            <div class="product-actions">
                                                <form action="{{ route('toggleWishlist') }}" method="POST"
                                                    class="wishlist-form" data-id="{{ $sale_new->sale_new_id }}">
                                                    @csrf
                                                    <button type="button"
                                                        class="btn btn-light mb-2 wishlist-btn {{ $sale_new->isFavorited ? 'text-primary' : '' }} color-danger"
                                                        title="{{ $sale_new->isFavorited ? 'Remove from wishlist' : 'Add to wishlist' }}">
                                                        <i class="fas fa-heart"></i>
                                                        {{ $sale_new->isFavorited ? 'Added to wishlist' : 'Add to wishlist' }}
                                                    </button>
                                                </form>
                                                <a href="{{ route('salenew.detail', $sale_new->sale_new_id) }}" class="btn btn-primary">
                                                    <i class="fa-solid fa-eye"></i> Details
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="product-body product-action-inner">
                                            <div class="product-cat">
                                                <a href="#">{{ $sale_new->name_sub_category }}</a>
                                            </div>
                                            <h3 class="product-title">{{ $sale_new->title }}</h3>
                                            <div class="product-content wrap">
                                                <p class="text-truncate">{{ $sale_new->description }}</p>
                                            </div>
                                            <div class="product-description">
                                                <p><i class="fas fa-map-marker-alt" style="color: #74C0FC;"></i> {{ $sale_new->address }}</p>
                                                <p><i class="fas fa-calendar-alt" style="color: #74C0FC;"></i> {{ $sale_new->created_at }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach



<<<<<<< HEAD

=======
>>>>>>> dbbbed3a2c0cb5e3ef02358438a029daa8ec40cb



                        </div><!-- End .products -->



                    </div><!-- End .col-lg-9 -->
                    <aside class="col-lg-3 col-xl-5col order-lg-first">
                        <div class="sidebar sidebar-shop">
                            <form method="POST" action="{{ route('search_channel') }}">
                                @csrf
                                <div class="widget widget-collapsible">
                                    <h3 class="widget-title">
                                        <a data-toggle="collapse" href="#widget-2" role="button" aria-expanded="true" aria-controls="widget-2">
                                            Category
                                        </a>
                                    </h3>
                                    <div class="collapse show" id="widget-2">
                                        <div class="widget-body">
                                            <select class="form-select form-control filter-input" name="category">
                                                <option value="">Select Category</option>
                                                @if(isset($category) && $category->count())
                                                @foreach ($category as $item)
                                                <option value="{{ $item->category_id }}"
                                                    {{ old('category') == $item->category_id ? 'selected' : '' }}>
                                                    {{ $item->name_category }}
                                                </option>
                                                @endforeach
                                                @else
                                                <p>No categories available.</p>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <input type="text" class="form-control" name="keyword" value="{{ old('keyword') }}" placeholder="Search ..." />
                                <button type="submit" class="btn btn-primary">Apply Filter</button>
                            </form>
<<<<<<< HEAD
=======




                            {{-- <div class="widget widget-collapsible">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-5" role="button" aria-expanded="true"
                                        aria-controls="widget-5">
                                        Price
                                    </a>
                                </h3>
                                <!-- End .widget-title -->
>>>>>>> dbbbed3a2c0cb5e3ef02358438a029daa8ec40cb


                        </div>
                        <!-- End .sidebar sidebar-shop -->
                    </aside>
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .page-content -->



</main>
@endsection
