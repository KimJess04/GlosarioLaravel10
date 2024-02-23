
@section('navbar')

<!-- Side-Nav-->
<aside class="main-sidebar hidden-print">
        <section class="sidebar">
          <div class="user-panel">
           
            <div class="pull-left info">
              <p>Jessica Olvera 5°IS<br> </p>
              <p ></p>
            </div>
            <div class="pull-left image"><img></div>
            <div class="pull-left image"><img></div>
          </div>
          <!-- Sidebar Menu-->
          <ul class="sidebar-menu">
            <li class="active"><a href="{{ url('glosario') }}"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
            <li class="treeview"><a href="#"><i class="fa fa-laptop"></i><span> Conceptos </span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">

             
              
              @foreach($terminos as $termino)
                  <li><a href="{{ url('glosario/'. $termino->id ) }}" class="dropdown-item"><i class="fa fa-circle-o"></i>{{ $termino->nombre }}</a></li>
              @endforeach
               
                
                
              </ul>
            </li>

            <li class="treeview"><a href="#"><i class="fa fa-laptop"></i><span> Acerca De... </span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="{{ url('glosario/acercaDe') }}"><i class="fa fa-circle-o"></i> Autora </a></li>
              </ul>
            </li>

          </ul>
        </section>
      </aside>
