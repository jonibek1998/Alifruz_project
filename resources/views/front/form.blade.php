@include('admin.errors')
<form action="{{route('subscription')}}" 
   method="POST"
   enctype="multipart/form-data"
   name="EmailForm">
      <div class="row">
         {{ csrf_field() }}
         <div class="col-lg-6">
            <div class="form-element"><input name="name" type="text" placeholder="You name"></div>
         </div>
         <div class="col-lg-6">
            <div class="form-element">
               <div class="select-wrapper">
            {{Form::select('provide_id', 
               $freights,
               null, 
               ['placeholder' => 'Select a Freigh'])
            }}
               </div>
            </div>
            {{-- <div class="form-element">
               <div class="select-wrapper">
                  <select name="freight">
                     <option value="" selected disabled>Select a Freight</option>
                     <option value="">Air Freight</option>
                     <option value="">Ocean Freight</option>
                     <option value="">Road Freight</option>
                  </select>
               </div>
            </div> --}}
         </div>
         <div class="col-lg-6">
            <div class="form-element"><input name="email" type="text" placeholder="Email"></div>
         </div>
         <div class="col-lg-6">
            <div class="form-element"><input name="phone" type="tel" placeholder="Phone"></div>
         </div>
         <div class="col-lg-12">
            <div class="form-element mb-0"><button type="submit" class="boxed-btn"><span>Submit</span></button></div>
         </div>
      </div>
   </form>