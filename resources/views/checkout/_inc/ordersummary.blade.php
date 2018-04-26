<aside class="sidebar sticky">
  <div class="padding-top-2x hidden-lg-up"></div>
  {{-- Order Summary --}}
  <section class="widget widget-order-summary">
    <h3 class="widget-title">Order Summary</h3>
    <table class="table">
      <tr class="passid-{{ $pass->id }}">
        <td>
          <h6 class="mb-0">{{ $pass->name }} Pass</h6>
          <p class="mt-0 mb-0">{{ $pass->start->format('M d, Y') }} - {{ $pass->end->format('M d, Y') }}</p>
          <p class="mt-0">{{ count($pass->discounts) }} Discounts</p>
        </td>
        <td class="text-medium">$<span class="passFee">{{ number_format($pass->price/100, 2, '.', ',') }}</span></td>
      </tr>
      <tr>
        <td class="text-left">
          <div class="form-group{{ $errors->has('promo') ? ' has-error' : '' }}">
              {!! Form::text('promo', null, ['class' => 'form-control form-control-rounded', 'id' => 'promo']) !!}
              {!! Form::label('promo', 'Promo Code') !!}
              <small class="text-danger">{{ $errors->first('promo') }}</small>
          </div>
        </td> 
        <td class="text-medium">$<span id="promoamount" class="promoamount">0.00</span></td>    
      </tr>
      <tr>
        <td>
          <div class="custom-control custom-checkbox">
            {!! Form::checkbox('donate4', '1', null, ['id' => 'donate4', 'class' => 'custom-control-input pointer donate4']) !!} 
            <label class="custom-control-label dp-warning pointer" for="donate4">Add $4 to get kids outdoors.</label>
            <p><a href="#" data-toggle="modal" data-target="#modalDonate" id="whatIsThis">What is this?</a></p> 
          </div>
        </td>     
        <td class="text-medium">$<span id="donateAmount" class="donateAmount">0</span></td>   
      </tr>       
      <tr>
        <td></td>
        <td><h4><strong>$<span id="totalDue" class="totalDue"></span></strong></h4></td>
      </tr>
      <tr>
        <td colspan="2">
          {!! Form::button('Get My Pass <i class="icon-arrow-right"></i></a>', ['type' => 'submit', 'class' => 'btn btn-primary btn-xl btn-block float-right m-2', 'onClick' => 'goog_report_conversion(\'Pass Purchased\')']) !!}
        </td>
      </tr> 
    </table>
  </section>
</aside>