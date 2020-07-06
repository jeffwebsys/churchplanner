



<div class="page-body">

<div class="row">
<div class="col-lg-12">
<div class="cover-profile">
<div class="profile-bg-img">
<img class="profile-bg-img img-fluid" src="../files/assets/images/user-profile/bg-img1.jpg" alt="bg-img">
<div class="card-block user-info">
<div class="col-md-12">
<div class="media-left">
<a href="#" class="profile-image">
<img class="user-img img-radius" src="{{ asset('storage/photos/'.auth()->user()->profile->photo) }}" alt="user-img">
</a>
</div>
<div class="media-body row">
<div class="col-lg-12">
<div class="user-title">
<h2>{{auth()->user()->name}}</h2>
<span class="text-white">{{auth()->user()->profile->work }}</span>
</div>
 </div>
<div>
<div class="pull-right cover-btn">
<button type="button" class="btn btn-primary m-r-10 m-b-5"><i class="icofont icofont-plus"></i> Follow</button>
<button type="button" class="btn btn-primary"><i class="icofont icofont-ui-messaging"></i> Message</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-lg-12">

<div class="tab-header card">
<ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
<li class="nav-item">
<a class="nav-link active" data-toggle="tab" href="#personal" role="tab">Personal Info</a>
<div class="slide"></div>
</li>

</ul>
</div>


<div class="tab-content">

<div class="tab-pane active" id="personal" role="tabpanel">

<div class="card">
<div class="card-header">
<h5 class="card-header-text">About Me</h5>
<button id="edit-btn" type="button" class="btn btn-sm btn-primary waves-effect waves-light f-right">
<i class="icofont icofont-edit"></i>
</button>
</div>
<div class="card-block">
<div class="view-info">
<div class="row">
<div class="col-lg-12">
<div class="general-info">
<div class="row">
<div class="col-lg-12 col-xl-6">
<div class="table-responsive">
<table class="table m-0">
<tbody>
<tr>
<th scope="row">Full Name</th>
<td>{{auth()->user()->name}}</td>
</tr>
<tr>
<th scope="row">Gender</th>
<td>{{auth()->user()->profile->gender}}</td>
</tr>
<tr>
<th scope="row">Birth Date</th>
<td>{{ auth()->user()->profile->birthday }}</td>
</tr>

<tr>
<th scope="row">Location</th>
<td>{{ auth()->user()->profile->location }}</td>
</tr>
</tbody>
</table>
</div>
</div>
 
<div class="col-lg-12 col-xl-6">
<div class="table-responsive">
<table class="table">
<tbody>
<tr>
<th scope="row">Email</th>
<td><a href="#!"><span class="__cf_email__" data-cfemail="5713323a3817322f363a273b327934383a">{{auth()->user()->email}}</span></a></td>
</tr>
<tr>
    <th scope="row">Profession</th>
    <td><a href="#!"><span class="__cf_email__" data-cfemail="5713323a3817322f363a273b327934383a">{{auth()->user()->profile->work}}</span></a></td>
    </tr>
<tr>
<th scope="row">Testimonials</th>
<td>{{auth()->user()->profile->testimonials}}</td>
</tr>

</tbody>
</table>
</div>
</div>

</div>

</div>

</div>

 </div>

</div>



</div>

</div>


</div>




</div>

</div>
</div>
</div>




