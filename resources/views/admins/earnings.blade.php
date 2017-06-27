@extends('layouts.admin')
@section('page')
<center><h2>administration d'Hopital / clinique / pharmacie</h2></center>

  <div class="row">
	            <div class="col-xl-6">
	                <div class="chart-statistic-box">
	                    <div class="chart-txt">
	                        <div class="chart-txt-top">
	                            <p><span class="unit">$</span><span class="number">1540</span></p>
	                            <p class="caption">Week income</p>
	                        </div>
	                        <table class="tbl-data">
	                            <tr>
	                                <td class="price color-purple">120$</td>
	                                <td>Orders</td>
	                            </tr>
	                            <tr>
	                                <td class="price color-yellow">15$</td>
	                                <td>Investments</td>
	                            </tr>
	                            <tr>
	                                <td class="price color-lime">55$</td>
	                                <td>Others</td>
	                            </tr>
	                        </table>
	                    </div>
	                    <div class="chart-container">
	                        <div class="chart-container-in">
	                            <div id="chart_div"></div>
	                            <header class="chart-container-title">Income</header>
	                            <div class="chart-container-x">
	                                <div class="item"></div>
	                                <div class="item">tue</div>
	                                <div class="item">wed</div>
	                                <div class="item">thu</div>
	                                <div class="item">fri</div>
	                                <div class="item">sat</div>
	                                <div class="item">sun</div>
	                                <div class="item">mon</div>
	                                <div class="item"></div>
	                            </div>
	                            <div class="chart-container-y">
	                                <div class="item">300</div>
	                                <div class="item"></div>
	                                <div class="item">250</div>
	                                <div class="item"></div>
	                                <div class="item">200</div>
	                                <div class="item"></div>
	                                <div class="item">150</div>
	                                <div class="item"></div>
	                                <div class="item">100</div>
	                                <div class="item"></div>
	                                <div class="item">50</div>
	                                <div class="item"></div>
	                            </div>
	                        </div>
	                    </div>
	                </div><!--.chart-statistic-box-->

	                     <div class="col-sm-6">
	                        <article class="statistic-box green">
	                            <div>
	                                <div class="number">{{$receptionists}}</div>
	                                <div class="caption"><div>Receptionists</div></div>
	                                <div class="percent">
	                                    <div class="arrow up"></div>
	                                    <p>84%?</p>
	                                </div>
	                            </div>
	                        </article>
	                    </div><!--.col-->

	            </div><!--.col-->
 
           


	            <div class="col-xl-6">
	                <div class="row">
	                    <div class="col-sm-6">
	                        <article class="statistic-box red">
	                            
	                            <div>
	                                <div class="number">{{$patients}}</div>
	                                <div class="caption"><div>Patients</div></div>
	                                <div class="percent">
	                                    <div class="arrow up"></div>
	                                    <p>15%?</p>
	                                </div>
	                            </div>

	                        </article>
	                    </div><!--.col-->
	                    <div class="col-sm-6">
	                        <article class="statistic-box purple">
	                            <div>
	                                <div class="number">{{$departments}}</div>
	                                <div class="caption"><div>Departments</div></div>
	                                <div class="percent">
	                                    <div class="arrow down"></div>
	                                    <p>11%?</p>
	                                </div>
	                            </div>
	                        </article>
	                    </div><!--.col-->
	                    <div class="col-sm-6">
	                        <article class="statistic-box yellow">
	                            <div>
	                                <div class="number">{{$doctors}}</div>
	                                <div class="caption"><div>Doctors</div></div>
	                                <div class="percent">
	                                    <div class="arrow down"></div>
	                                    <p>5%?</p>
	                                </div>
	                            </div>
	                        </article>
	                    </div><!--.col-->


                       
	                    
	                    <div class="col-sm-6">
	                        <article class="statistic-box green">
	                            <div>
	                                <div class="number">{{$nurses}}</div>
	                                <div class="caption"><div>Nurses</div></div>
	                                <div class="percent">
	                                    <div class="arrow up"></div>
	                                    <p>84%?</p>
	                                </div>
	                            </div>
	                        </article>
	                    </div><!--.col-->

                       
                        
	                    <div class="col-sm-6">
	                        <article class="statistic-box green">
	                            <div>
	                                <div class="number">{{$pharmacists}}</div>
	                                <div class="caption"><div>Pharmacists</div></div>
	                                <div class="percent">
	                                    <div class="arrow up"></div>
	                                    <p>84%?</p>
	                                </div>
	                            </div>
	                        </article>
	                    </div><!--.col-->
	                    

	                    <div class="col-sm-6">
	                        <article class="statistic-box green">
	                            <div>
	                                <div class="number">{{$accountants}}</div>
	                                <div class="caption"><div>Accountants</div></div>
	                                <div class="percent">
	                                    <div class="arrow up"></div>
	                                    <p>84%?</p>
	                                </div>
	                            </div>
	                        </article>
	                    </div><!--.col-->
	                    


	                </div><!--.row-->
	            </div><!--.col-->
	        </div><!--.row-->



@stop