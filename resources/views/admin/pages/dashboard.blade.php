   @extends('admin.layouts.main')
   @section('content')
       <!-- Main Content -->
       <div class="main-content">
           <section class="section">
               <div class="section-header">
                   <h1>Selamat Datang Admin {{ Auth::user()->name }}</h1>
               </div>

               <div class="section-body">
               </div>
           </section>
       </div>
   @endsection
