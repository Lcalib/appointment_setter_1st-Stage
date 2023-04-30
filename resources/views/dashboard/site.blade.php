@extends('layouts.passport')

@section('title', 'Create Appointment')

@section('site')

<div id="site" class="tabcontent">
    <div class="tabcontent-header">
        <p>Select Your Site</p>
        <!-- <form action="#" method="POST">
            @csrf -->
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-label-group outline" id="forcountry">
                        <select class="custom-select" id="country" name="country" required>
                            <option selected>PHILIPPINES</option>
                        </select>
                        <span><label for="country">Choose Country</label></span>
                    </div>
                </div>
            
                <div class="col-sm-8">
                    <div class="form-label-group outline" id="forsite">
                        <select class="custom-select" id="selectsite" name="site" required="required"><option disabled="disabled" selected="selected" value=""></option>
                            <option value="639">01. Robinsons Las Pinas</option><option value="640">02. Robinsons Magnolia</option><option value="644">03. SM Aura</option><option value="641">04. SM Mall of Asia</option><option value="642">05. SM North Edsa</option><option value="665">06. Newport Mall</option><option value="668">07. San Pedro Laguna</option><option value="673">08. SM Seaside Cebu</option><option value="674">09. SM Lanang Premier Davao City</option><option value="660">10. SM Olongapo - Simple Renewal Only</option><option value="676">11. Robinsons Novaliches - Simple Renewal Only</option><option value="677">12. Robinsons Lipa - Simple Renewal Only</option><option value="678">13. SM Manila - Simple Renewal Only</option><option value="683">14. Robinsons Angeles - Simple Renewal Only</option><option value="684">15. Robinsons Bacolod - Simple Renewal Only</option><option value="685">16. Robinsons Iloilo - Simple Renewal Only</option><option value="686">17. Robinsons Malolos - Simple Renewal Only</option><option value="687">18. ROBINSONS STARMILLS  ( PAMPANGA )- Simple Renewal Only</option><option value="688">19. SM Downtown Premier (CDO) - Simple Renewal Only</option><option value="10">Angeles (MarQuee Mall,Angeles, Pampanga)</option><option value="486">Antipolo (SM Cherry, Antipolo City, Rizal)</option><option value="11">Bacolod (Robinsons Bacolod)</option><option value="12">Baguio (SM City Baguio)</option><option value="14">Butuan (Robinsons Butuan)</option><option value="15">Cagayan De Oro (BPO Tower SM Downtown Premier)</option><option value="16">Calasiao (Robinsons Calasiao, Pangasinan)</option><option value="17">Cebu (Pacific Mall Metro Mandaue, Cebu)</option><option value="487">Clarin (Town Center,,Clarin, Misamis OCC)</option><option value="18">Cotabato (Mall of Alnor, Cotabato City)</option><option value="4">DFA Manila (Aseana)</option><option value="516">DFA Manila (Aseana-Courtesy Lane)</option><option value="5">DFA NCR Central (ACTIVE OFW ONLY - Robinsons Galleria)</option><option value="6">DFA NCR East (SM Megamall, Mandaluyong City)</option><option value="423">DFA NCR North (Robinsons Novaliches, Quezon City)</option><option value="7">DFA NCR Northeast (Ali Mall Cubao, Quezon City)</option><option value="8">DFA NCR South (Metro ATC, Muntinlupa City)</option><option value="9">DFA NCR West (SM City, Manila)</option><option value="488">Dasmariñas ( SM City Dasmariñas)</option><option value="19">Davao (SM City Davao)</option><option value="20">Dumaguete (Robinsons Dumaguete)</option><option value="21">General Santos (Robinsons Gen. Santos City)</option><option value="424">Ilocos Norte (Robinsons Place, San Nicolas)</option><option value="22">Iloilo (Robinsons Iloilo)</option><option value="23">La Union (CSI Mall San Fernando, La Union)</option><option value="24">Legazpi (Pacific Mall Legazpi)</option><option value="13">Lipa (Robinsons Lipa)</option><option value="25">Lucena (Pacific Mall, Lucena)</option><option value="489">Malolos (CTTCH.,Xentro Mall, Malolos City)</option><option value="27">Pampanga (Robinsons StarMills San Fernando)</option><option value="553">Paniqui,  Tarlac (WalterMart)</option><option value="26">Puerto Princesa (Robinsons Palawan)</option><option value="490">San Pablo ( Sm City San Pablo)</option><option value="425">Santiago, Isabela (Robinsons Place Santiago)</option><option value="28">Tacloban (Robinsons N. Abucay, Tac. City)</option><option value="491">Tagum ( Gaisano Mall of Tagum )</option><option value="29">Tuguegarao (Reg. Govt Center, Tuguegarao City)</option><option value="30">Zamboanga (Go-Velayo Bldg. Vet. Ave. Zambo)</option>
                        </select>
                        <span><label for="selectsite" >Choose Site</label></span>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-primary" id="nextbutton" onclick="totabdate()" disabled>Next</button>
            <script>
                    let button = document.querySelector("#site #nextbutton");
                    let input = document.getElementById("selectsite");

                    input.addEventListener("input", function(e) {
                    if (input.value.length == 0) {
                        button.disabled = true;
                    }else{
                        button.disabled = false;
                    }
                    });

                </script>
        <!-- </form> -->
    </div>
</div>
@endsection