   @extends('admin.layouts.main')
   @section('content')
       <!-- Main Content -->
       <div class="main-content">
           <section class="section">
               <div class="section-header">
                   <h1>{{ $title }}</h1>

               </div>
               @if (session('status'))
                   <div class="alert alert-info">
                       {{ session('status') }}
                   </div>
               @endif
               <div class="section-body">
                   <div class="row">
                       <div class="col-12 col-md-6 col-lg-6">
                           <div class="card">
                               <div class="card-header">
                                   <h4>Profil Admin</h4>
                               </div>
                               <form method="POST" action="{{ route('profile.update') }}">
                                   @csrf
                                   @method('patch')
                                   <div class="card-body">
                                       <div class="form-group">
                                           <label>Nama</label>
                                           <input type="text" class="form-control" name="name" placeholder="Nama"
                                               value="{{ old('name', $user->name) }}" autofocus autocomplete="name" />
                                           @error('name')
                                               <small class="form-text text-danger">{{ $message }}</small>
                                           @enderror
                                       </div>
                                       <div class="form-group">
                                           <label>Email</label>
                                           <input type="email" class="form-control" name="email"
                                               value="{{ old('email', $user->email) }}" autocomplete="email"
                                               placeholder="Email" />
                                           @error('email')
                                               <small class="form-text text-danger">{{ $message }}</small>
                                           @enderror
                                       </div>
                                   </div>
                                   <div class="card-footer text-right">
                                       <button type="submit" class="btn btn-primary">Simpan</button>
                                   </div>
                               </form>
                           </div>
                       </div>
                       <div class="col-12 col-md-6 col-lg-6">
                           <div class="card">
                               <div class="card-header">
                                   <h4>Update Password</h4>
                               </div>
                               <form method="post" action="{{ route('password.update') }}">
                                   @csrf
                                   @method('put')
                                   <div class="card-body">
                                       <div class="form-group">
                                           <label>Password Saat Ini</label>
                                           <input placeholder="Masukkan Password Saat Ini" name="current_password"
                                               type="text" class="form-control" name="name">
                                           @error('current_password', 'updatePassword')
                                               <small class="form-text text-danger">{{ $message }}</small>
                                           @enderror
                                       </div>
                                       <div class="form-group">
                                           <label>Password Baru</label>
                                           <input type="password" class="form-control" name="password" id="password"
                                               placeholder="Masukkan Password Baru" autocomplete="new-password" />
                                           @error('password', 'updatePassword')
                                               <small class="form-text text-danger">{{ $message }}</small>
                                           @enderror
                                       </div>
                                       <div class="form-group">
                                           <label>Konfirmasi Password Baru</label>
                                           <input type="password" class="form-control" name="password_confirmation"
                                               id="password_confirmation" placeholder="Konfirmasi Password Baru"
                                               autocomplete="new-password" />
                                           @error('password_confirmation', 'updatePassword')
                                               <small class="form-text text-danger">{{ $message }}</small>
                                           @enderror
                                       </div>
                                   </div>
                                   <div class="card-footer text-right">
                                       <button type="submit" class="btn btn-primary">Simpan</button>
                                   </div>
                               </form>
                           </div>
                       </div>
                   </div>
               </div>
           </section>
       </div>
   @endsection
