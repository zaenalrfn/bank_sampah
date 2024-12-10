 <div class="col-md-3 col-lg-2 sidebar d-flex flex-column p-3 border-end">
     <h3 class="text-center">Dashboard</h3>
     <hr>
     <ul class="nav flex-column">
         <li class="nav-item">
             <a class="nav-link active" href="/">📊 Overview</a>
         </li>
         <li class="nav-item">
             <a class="nav-link" href="/article">✍️ Artikel</a>
         </li>
         <li class="nav-item">
             <a class="nav-link" href="{{ route('waste-submission.index') }}">♻️ Setoran Sampah</a>
         </li>
         <li class="nav-item">
             <a class="nav-link" href="#">👤 Kelola Pengguna</a>
         </li>
         <li class="nav-item">
             <a class="nav-link" href="{{ route('waste-submission.setor') }}">📤 Setor</a>
         </li>
         <li class="nav-item">
             <a class="nav-link" href="#">📜 Riwayat Setoran</a>
         </li>
     </ul>
 </div>
