<aside class="sidebar sticky">
  <div class="padding-top-2x hidden-lg-up"></div>
  {{-- Order Summary --}}
  <section class="widget widget-order-summary">
    <h3 class="widget-title">Order Summary</h3>
    <table class="table">
      <tr class="data-passid-1">
        <td>Yellowstone</td>
        <td class="text-medium">$<span class="passFee">26.00</span></td>
      </tr>
      <tr class="data-passid-2">
        <td>Yosemite</td>
        <td class="text-medium">$<span class="passFee">26.00</span></td>
      </tr>
      <tr>
        <td>
          <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="donate4">
            <label class="custom-control-label dp-warning" for="donate4">Add $4 to get kids outdoors.</label>
            <p><a href="#" data-toggle="modal" data-target="#exampleModal"><i class="pe-7s-help1"></i> What is this?</a></p> 
          </div>
        </td>     
        <td  class="text-medium">$<span id="donateAmount" class="donateAmount">0</span></td>   
      </tr>       
      <tr>
        <td></td>
        <td class="text-lg text-medium">$<span id="totalDue" class="totalDue"></span></td>
      </tr>
    </table>
  </section>
</aside>