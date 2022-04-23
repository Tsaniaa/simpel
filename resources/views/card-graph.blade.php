{{-- ini tak buat manual satu" card, coba di looping foreach buat masing" tahun :) --}}

<div class="container my-4">

  <!--Carousel Wrapper-->
  <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
    
  <!--Indicators-->
  <ol class="carousel-indicators">
  <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
  <li data-target="#multi-item-example" data-slide-to="1"></li>
  
  </ol>
  <!--/.Indicators-->
  
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
  
  <!--First slide-->
  <div class="carousel-item active">
  
    @foreach ($datas as $data)


      <div class="col-md-4" style="float:left">
      <div class="card mb-2">
          <div class="card-header bg-white">
            <center><h2 style="color: #05445E"><i class="fa fa-folder-open me-2"></i>Tahun {{ $data->tahun }}</h2></center>
          </div>
          <div class="card-body">
            <p style="text-align: start">Total Penelitian: {{ $data->jumlah_penelitian }} </p>
            <div class="table-responsive">
              <table class="table table-bordered">
                <tbody>
                  <tr>
                    <td >Dasar : 
                      @foreach ($dasar as $item)
                        @if ($item->tahun == $data->tahun)
                            {{ $item->total  }}
                        @endif
                      @endforeach
                    </td>
                    <td>Terapan: 
                      @foreach ($terapan as $item)
                        @if ($item->tahun == $data->tahun)
                            {{ $item->total  }}
                        @endif
                      @endforeach
                    </td>
                    <td>Unggulan: 
                      @foreach ($unggulan as $item)
                          @if ($item->tahun == $data->tahun)
                              {{ $item->total  }}
                          @endif
                      @endforeach
                    </td>
                    <td>PLP:
                      @foreach ($plp as $item)
                        @if ($item->tahun == $data->tahun)
                            {{ $item->total }}
                        @endif
                      @endforeach
                    </td>
                  </tr>
                </tbody>
              </table>
            </div> 
          </div>
        </div>
      </div>
    @endforeach

  
    {{-- <div class="col-md-4" style="float:left">
      <div class="card mb-2">
         <div class="card-header bg-white">
           <center><h2 style="color: #05445E"><i class="fa fa-folder-open me-2"></i>Tahun 2020</h2></center>
         </div>
         <div class="card-body">
           <p style="text-align: start">Total Penelitian: 45</p>
           <div class="table-responsive">
             <table class="table table-bordered">
               <tbody>
                 <tr>
                   <td >Dasar: 12</td>
                   <td>Terapan: 8</td>
                   <td>Unggulan: 4</td>
                   <td>PLP: 21</td>
                 </tr>
               </tbody>
             </table>
           </div> 
         </div>
       </div>
     </div>
  
     <div class="col-md-4" style="float:left">
      <div class="card mb-2">
         <div class="card-header bg-white">
           <center><h2 style="color: #05445E"><i class="fa fa-folder-open me-2"></i>Tahun 2020</h2></center>
         </div>
         <div class="card-body">
           <p style="text-align: start">Total Penelitian: 45</p>
           <div class="table-responsive">
             <table class="table table-bordered">
               <tbody>
                 <tr>
                   <td >Dasar: 12</td>
                   <td>Terapan: 8</td>
                   <td>Unggulan: 4</td>
                   <td>PLP: 21</td>
                 </tr>
               </tbody>
             </table>
           </div> 
         </div>
       </div>
     </div>
  
  </div>
  <!--/.First slide-->
  
  <!--Second slide-->
  <div class="carousel-item">
  
    <div class="col-md-4" style="float:left">
      <div class="card mb-2">
         <div class="card-header bg-white">
           <center><h2 style="color: #05445E"><i class="fa fa-folder-open me-2"></i>Tahun 2020</h2></center>
         </div>
         <div class="card-body">
           <p style="text-align: start">Total Penelitian: 45</p>
           <div class="table-responsive">
             <table class="table table-bordered">
               <tbody>
                 <tr>
                   <td >Dasar: 12</td>
                   <td>Terapan: 8</td>
                   <td>Unggulan: 4</td>
                   <td>PLP: 21</td>
                 </tr>
               </tbody>
             </table>
           </div> 
         </div>
       </div>
     </div>
  
     <div class="col-md-4" style="float:left">
      <div class="card mb-2">
         <div class="card-header bg-white">
           <center><h2 style="color: #05445E"><i class="fa fa-folder-open me-2"></i>Tahun 2020</h2></center>
         </div>
         <div class="card-body">
           <p style="text-align: start">Total Penelitian: 45</p>
           <div class="table-responsive">
             <table class="table table-bordered">
               <tbody>
                 <tr>
                   <td >Dasar: 12</td>
                   <td>Terapan: 8</td>
                   <td>Unggulan: 4</td>
                   <td>PLP: 21</td>
                 </tr>
               </tbody>
             </table>
           </div> 
         </div>
       </div>
     </div>
  
     <div class="col-md-4" style="float:left">
      <div class="card mb-2">
         <div class="card-header bg-white">
           <center><h2 style="color: #05445E"><i class="fa fa-folder-open me-2"></i>Tahun 2020</h2></center>
         </div>
         <div class="card-body">
           <p style="text-align: start">Total Penelitian: 45</p>
           <div class="table-responsive">
             <table class="table table-bordered">
               <tbody>
                 <tr>
                   <td >Dasar: 12</td>
                   <td>Terapan: 8</td>
                   <td>Unggulan: 4</td>
                   <td>PLP: 21</td>
                 </tr>
               </tbody>
             </table>
           </div> 
         </div>
       </div>
     </div> --}}
  
  </div>
  <!--/.Second slide-->
  
  
  
  </div>
  <!--/.Slides-->
  
 <!--Controls-->
 <center><div class="controls-top mt-4">
  <a class="btn-floating me-4" href="#multi-item-example" data-slide="prev"><i class="fas fa-backward fa-2x"></i></a>
  <a class="btn-floating me-4" href="#multi-item-example" data-slide="next"><i class="fas fa-forward fa-2x"></i></a>
  </div></center>
  <!--/.Controls-->

  </div>
  <!--/.Carousel Wrapper-->
  