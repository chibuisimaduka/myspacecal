@layout('home::templates.hometemplate')


@section('content')
 <div id="highlighted">
      <div class="container">
        <div class="row-fluid header">
          <h2 class="page-title"><span>Our Services</span> <small>What we can do for you</small></h2>
        </div>
      </div>
    </div>    
      
    <div id="content">
      <div class="container">       
        <!-- About -->        
        <div class="row">
        
          <div class="span8">           
            
            <!-- About company -->
            <div class="block">
              <h3 id ="eswireless" class="block-title sub-title">ES Wireless</h3>
              {{HTML::image('img/espic.png', 'ES Wireless Image',array('align'=>'left'));}}
              <p>
ES-Wireless is World's # 1 Genius Unlock Code Provider, Nation's # 1 Cell Parts Wholesale Distributor and Buffalo's 
# 1 Cell Phone Repair Center. We are your go to company for Blackberry, iDevice, HTC, Motorola,
Samsung and Computer repairs. We are also authorized dealer for Boost Mobile, Virgin Mobile, CLEAR, 
Direct TV, H2O Wireless, Net 10, Red Pocket, Simple Mobile, Solavei, T-Mobile, Ultra Mobile and Boss Revolution.
Additionally, we are also wholesale distributor of Cell Phones and iPhone IMEI Unlock.</p><p>
Our team is dedicated to excellent customer service and will always go above and beyond customer expectations. 
As a result, a large percentage of our business comes from repeat customers or referrals.
<b>ES Wireless is Composed of two parts:</b></p>
              
              <h3 class="block-title sub-title">My Cell Parts</h3>
              <blockquote><a href="http://www.mycellparts.com">www.mycellparts.com</a> is nation's # 1 Cell Parts wholesale distributor where you could purchase iPhone, iPod, iPad, Samsung OEM Parts and iDevice accessories at wholesale price nationwide.</blockquote>
              <h3 class="block-title sub-title">Genius Unlock</h3>
              <blockquote><a href="http://www.mycellparts.com">www.geniusunlock.com</a> is world's # 1 Genius Unlock code provider where you could purchase unlock codes at wholesale price anywhere in the world. </blockquote>
            </div>
          </div>
          
          <!-- sidebar -->
          <div class="span4 sidebar sidebar-right">
            <div class="inner">
              <div class="block">
                <h3 class="block-title sub-title"><span>About Menu</span></h3>
                <ul class="nav nav-list secondary-nav">
                  <li><a href="#eswireless"><i class="icon-chevron-right"></i> ES Wireless</a></li>
                  <li><a href="#team"><i class="icon-chevron-right"></i> My Cell Parts</a></li>
                  <li><a href="#testimonials"><i class="icon-chevron-right"></i>Genius Unlock</a></li>
                </ul>
              </div>
              
  
            </div>
          </div>
          
        </div>
      </div>
    </div>

@endsection

