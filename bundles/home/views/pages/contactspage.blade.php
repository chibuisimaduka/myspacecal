@layout('home::templates.hometemplate')


@section('content')
    <div id="highlighted">
      <div class="container">
        <div class="row-fluid header">
          <h2 class="page-title"><span>Contact</span> <small>Nothing is too big or small, get in touch!</small></h2>
        </div>
      </div>
    </div> 
        
      
    <div id="content">
      <div class="container">
        
        <div class="row block">
          <div class="span6">
            <form id="contact-form" action="#">
              <input type="text" class="span5" placeholder="Name">            
              <input type="email" class="span5" placeholder="Email">
              <textarea rows="15" class="span5" placeholder="Message"></textarea>
              <input type="button" class="btn btn-primary" value="Send Message">
            </form>
          </div>
          <div class="span6">
            <h3 class="block-title sub-title"><span>Other Ways To Get In Touch</span></h3>
            <p><span class="span1"><abbr title="Phone">Phone</abbr>:</span>716-834-3401</p>
            <p><span class="span1"><abbr title="Fax">Text</abbr>:</span> 617-415-8922 </p>
            <p><span class="span1"><abbr title="Email">Email</abbr>:</span> info@es-wireless.com </p>
            <p><span class="span1"><abbr title="Address">Address</abbr>:</span>1101 Niagara Falls Blvd Amherst, NY 14226 .</p>
         <!--   <a href="https://maps.google.co.uk/maps?q=London&amp;ie=UTF8&amp;hq=&amp;hnear=London,+United+Kingdom&amp;gl=uk&amp;t=m&amp;ll=51.510238,-0.127029&amp;spn=0.042735,0.102654&amp;z=12&amp;">
              <img src="img/misc/map.png" alt="Location map" class="img-polaroid" />-->
            </a>
          </div>
        </div>
      </div>
    </div>
@endsection

