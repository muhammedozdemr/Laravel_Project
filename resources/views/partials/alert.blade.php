@if(session()->has('mesaj'))
      
            <div class="container-fluid">
                <div style="text-align: center; padding: 3px; font-weight: bold;" class="alert alert-{{session('mesaj_tur')}}">{{session('mesaj')}}</div>
            </div>
        
@endif