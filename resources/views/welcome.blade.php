<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ubx Evaluation</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Boostrap CDN-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>

    <body class="antialiased">
        <div class="container m-5">
            <!--errors-->
            @if (count($errors) > 0)
            <div class="row">
                <div class="col-md-8 col-md-offset-1">
                  <div class="alert alert-danger">
                      @foreach($errors->all() as $error)
                      {{ $error }} <br>
                      @endforeach
                  </div>
                </div>
            </div>
            @endif
            <!--end of errors-->

            @if (Session::has('success'))
            <div class="alert alert-primary" role="alert">
                {{Session::get('success')}}
              </div>
            @endif
            <form action="{{route('excel-save')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <h2 class="text-muted">Upload your excel file</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" name="excel_file">
                            <span class="input-group-text text-primary " id="inputGroup-sizing-default">
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 502.173 502.173" style="enable-background:new 0 0 502.173 502.173; width:25px;" xml:space="preserve">
                                  <g>
                                      <g>
                                          <g>
                                              <path d="M494.336,443.646L316.402,265.713c20.399-31.421,30.023-68.955,27.189-106.632     C340.507,118.096,322.783,79.5,293.684,50.4C261.167,17.884,217.984,0,172.023,0c-0.222,0-0.445,0.001-0.668,0.001     C125.149,0.176,81.837,18.409,49.398,51.342c-66.308,67.316-65.691,176.257,1.375,242.85     c29.112,28.907,67.655,46.482,108.528,49.489c37.579,2.762,75.008-6.867,106.343-27.21l177.933,177.932     c5.18,5.18,11.984,7.77,18.788,7.77s13.608-2.59,18.789-7.769l13.182-13.182C504.695,470.862,504.695,454.006,494.336,443.646z      M480.193,467.079l-13.182,13.182c-2.563,2.563-6.73,2.561-9.292,0L273.914,296.456c-1.936-1.937-4.497-2.929-7.074-2.929     c-2.044,0-4.098,0.624-5.858,1.898c-60.538,43.788-143.018,37.3-196.118-15.425C5.592,221.146,5.046,124.867,63.646,65.377     c28.67-29.107,66.949-45.222,107.784-45.376c0.199,0,0.392-0.001,0.591-0.001c40.617,0,78.785,15.807,107.52,44.542     c53.108,53.108,59.759,135.751,15.814,196.509c-2.878,3.979-2.441,9.459,1.032,12.932l183.806,183.805     C482.755,460.35,482.755,464.517,480.193,467.079z"/>
                                              <path d="M259.633,84.449c-48.317-48.316-126.935-48.316-175.253,0c-23.406,23.406-36.296,54.526-36.296,87.627     c0,33.102,12.89,64.221,36.296,87.627S138.906,296,172.007,296c33.102,0,64.222-12.891,87.627-36.297     C307.951,211.386,307.951,132.767,259.633,84.449z M245.492,245.561C225.863,265.189,199.766,276,172.007,276     c-27.758,0-53.856-10.811-73.484-30.44c-19.628-19.628-30.438-45.726-30.438-73.484s10.809-53.855,30.438-73.484     c20.262-20.263,46.868-30.39,73.484-30.39c26.61,0,53.227,10.133,73.484,30.39C286.011,139.112,286.011,205.042,245.492,245.561z     "/>
                                              <path d="M111.017,153.935c1.569-5.296-1.452-10.861-6.747-12.43c-5.294-1.569-10.86,1.451-12.429,6.746     c-8.73,29.459-0.668,61.244,21.04,82.952c1.952,1.952,4.512,2.929,7.071,2.929s5.118-0.977,7.071-2.928     c3.905-3.906,3.905-10.238,0-14.143C110.506,200.544,104.372,176.355,111.017,153.935z"/>
                                              <path d="M141.469,94.214c-10.748,4.211-20.367,10.514-28.588,18.735c-3.905,3.906-3.905,10.238,0,14.143     c1.952,1.952,4.512,2.929,7.071,2.929s5.118-0.977,7.07-2.929c6.26-6.26,13.575-11.057,21.741-14.255     c5.143-2.015,7.678-7.816,5.664-12.959C152.413,94.735,146.611,92.202,141.469,94.214z"/>
                                          </g>
                                      </g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                  </svg>
                            </span>

                          </div>
                    </div>

                    <div class="col-md-4">
                        <input type="submit" value="UPLOAD" class="btn btn-success">
                    </div>
                 </div>
            </form>


            @if (isset($data))
            <div class="mt-4 mx-auto" style="width: 230px;">
                <a href="{{route('home')}}" class="btn btn-success btn-lg">
                    HIDE DATA
                </a>
            </div>
            @else
            <div class="mt-4 mx-auto" style="width: 230px;">
                <a href="{{route('home',true)}}" class="btn btn-success btn-lg">
                    VIEW DATA
                </a>
            </div>
            @endif



            <!--show data-->
            @isset ($data)
            <div class="mt-4">
                <table class="table table-hover">
                    <thead class="bg-success text-light">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Cargo No</th>
                        <th scope="col">Cargo Type</th>
                        <th scope="col">Cargo Size</th>
                        <th scope="col">Weight</th>
                        <th scope="col">Remarks</th>
                        <th scope="col">Wharfage (USD)</th>
                        <th scope="col">Penalty (Days)</th>
                        <th scope="col">Storage (USD) </th>
                        <th scope="col">Electricity (USD)</th>
                        <th scope="col">Destuffing (USD)</th>
                        <th scope="col">Lifting (USD)</th>
                      </tr>
                    </thead>
                    <tbody>
                       @forelse ($data as $info)
                       <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$info->cargo_no}}</td>
                        <td>{{$info->cargo_type}}</td>
                        <td>{{$info->cargo_size}}</td>
                        <td>{{$info->weight}}</td>
                        <td>{{$info->remarks}}</td>
                        <td>{{$info->wharfage}}</td>
                        <td>{{$info->days}}</td>
                        <td>{{number_format($info->storage)}}</td>
                        <td>{{number_format($info->electricity)}}</td>
                        <td>{{number_format($info->destuffing)}}</td>
                        <td>{{number_format($info->lifting)}}</td>
                      </tr>
                       @empty
                         <h5 class="text-muted text-lg">There is no data uploaded</h5>
                       @endforelse
                    </tbody>
                  </table>
            </div>
            @endisset

        </div>
    </body>
</html>
