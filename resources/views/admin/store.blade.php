@extends('layouts.admin_master')

@section('admin_content')

    <br>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">CITYSHOP</li>
        <li class="breadcrumb-item active"><a href="{{ url('admin/stores') }}">Stores Panel</a></li>
        <li class="breadcrumb-item active">{{$name}}</li>
    </ol>

    <div class="row">
  <div class="col-lg-3 col-xl-3 col-md-3 col-sm-12">
    <div class="card">
      <div class="card-header">
      <strong>Store settings</strong>
      </div>
      <div class="list-group" id="list-tab" role="tablist">
        <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
        <a class="list-group-item list-group-item-action" id="list-edite-list" data-toggle="list" href="#list-edite" role="tab" aria-controls="edite">Edite</a>
        <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
        <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
        <a class="list-group-item list-group-item-action" id="list-networks-list" data-toggle="list" href="#list-networks" role="tab" aria-controls="networks">Social Networks <span class="badge badge-secondary">PRO</span></a>
      </div>
    </div>
  </div>
  <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12 tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">Home ..</div>
    <div class="tab-pane fade" id="list-edite" role="tabpanel" aria-labelledby="list-edite-list">
      <div class="card">
        <div class="card-header">
          <strong>Edite Store</strong>
        </div>

        <form method="POST" action="{{ url('admin/stores') }}">
          {{ csrf_field() }}
          <div class="card-body">
            <div class="form-group row" id="admin_input">
              
              <div class="col-12">      
                <label for="name" class="col-form-label">Store Name :</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Electro Adnane" required>
              </div>

              <div class="col-12">      
               <label for="address" class="col-form-label">Address :</label>
               <input type="text" class="form-control" name="address" id="address" placeholder="bd. Mly. ElAbass TETOUAN">
             </div>

             <div class="col-12">      
               <label for="tels" class="col-form-label">Phone(s) :</label>
               <input type="text" class="form-control" name="tels" id="tels" placeholder="06 63 28 54 08 , 06 61 44 25 34 " required>
             </div>

             <div class="col-12">      
               <label for="emails" class="col-form-label">Email(s) :</label>
               <input type="text" class="form-control" name="emails" id="emails" placeholder="concact@electro_adnane.com , services@electro_adnane.com">
             </div>
             
             <div class="col-12">      
               <label for="website" class="col-form-label">Website :</label>
               <input type="text" class="form-control" name="website" id="website" placeholder="www.ElectroAdnan.com">
             </div>

             <div class="col-12">      
               <label for="avatar" class="col-form-label">Logo :</label>
               <input type="text" class="form-control" name="avatar" id="avatar" placeholder="Electro Adnan">
             </div>

             <div class="col-12">      
               <label for="cover" class="col-form-label">Cover :</label>
               <input type="text" class="form-control" name="cover" id="cover" placeholder="Electro Adnan">
             </div>

             <div class="col-12">      
               <label for="description" class="col-form-label">Description :</label>
               <input type="text" class="form-control" name="description" id="description" placeholder="Electro Adnan">
             </div>
           </div>
         </div>
         <div class="card-footer text-muted">
           <input class="btn btn-primary" type="submit" value="Submit">
         </div>

       </form>

     </div>
   </div>
   <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">Messages</div>
   <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">Settings</div>
   <div class="tab-pane fade" id="list-networks" role="tabpanel" aria-labelledby="list-networks-list">Social Networks</div>

 </div>
 <div class="col-lg-3 col-xl-3 col-md-3 col-sm-12">
    <div class="card">
      <div class="card-header">
      <strong>Store settings</strong>
      </div>
      <img src="https://avatars0.githubusercontent.com/u/32069086?v=4&s=400" alt="Responsive image">
    </div>
</div>
</div>

@endsection