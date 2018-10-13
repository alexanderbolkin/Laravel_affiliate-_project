


                                    <?php 
                                        $timestemp = "2016-4-5 05:06:01";
                                        $year = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $timestemp)->year;
                                    
                                        $month = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $timestemp)->month;

                                        $day = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $timestemp)->day;

                                        $week = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $timestemp)->week;
                                        dd($month);
                                    ?>
                                    <?php
                                        $mytime = Carbon\Carbon::now();
                                        echo $mytime->toDateTimeString();
                                        
                                        
                                    ?>


                                        <?php 
                                        use Carbon\Carbon;
                                        $carbon=Carbon::now();
                                        echo $carbon->format('l');
                                        ?>


                                        $timestamp = strtotime('2009-10-22');
                                                $day = date('D', $timestamp);
                                                var_dump($day);
                                    

                                    //=====================//
                                    $today = Carbon::parse('now')->dayOfWeek - 1;
                                    if ($today < 0 ) 
                                    {
                                        $today = 6;
                                    }
                                    return $today;
                                    // dd($today);
                                    //=====================//



                 $date = Carbon::create(2015, 7, 2);
                // To get the first week of the day we can do this
                $Monday = $date->startOfWeek(); // 2015-06-29
                $mondayTwoWeeksLater = $date->addWeek(2); // 2015-07-13



                $date = Carbon::now();
                $today=$carbon->format('l');
                dd( $today);


                $time = strtotime("2011-07-01 00:00:00");
                $weekStartDate = date('Y-m-d',strtotime("last Monday", $time));



db value _>2011-07-01 00:00:00

$from->$weekStartDate ,
$to->2011-07-01 00:00:00


switch($day)
        {
            case #Monday#:
                $referral = ReferralLink::whereBetween('created_at', [$timestamp-1, $timestamp])->count();
            break;
            case #Tuesday#:
                $date = Carbon::now();
                $sunday = $date->startOfWeek(); // 2015-06-29
                $mondayTwoWeeksLater = $date->addWeek(2); // 2015-07-13
                
              
            break;
        }

    <form class="form-horizontal" role="form">
        <div class="form-group row">
            <label class="col-7 col-form-label text-md-right">Total Refferal this week &nbsp:&nbsp</label>
            <div class="col-4">
            
                <p class="form-control" value="Some text value..." 
                style="background-color:white;border-color:white">{{$weekReferrals}}</p>
            </div>
            
        </div>
        

        <div class="form-group row" style="padding-bottom:0px !impportant;margin-bottom:0px !impportant">
            <label class="col-7 col-form-label text-md-right">Total Earned this week&nbsp:&nbsp</label>
            <div class="col-5">
                <p class="form-control" value="Some text value..." 
                style="background-color:white;border-color:white">${{$weekBonous}}</p>
            </div>
        </div>

        
        <div class="form-group row" style="padding-bottom:0px !impportant;margin-bottom:0px !impportant">
            
            <label class="col-7 col-form-label text-md-right">All time Referrals count&nbsp:&nbsp</label>
            
            <div class="col-5">
                @forelse(auth()->user()->getReferrals() as $referral)
                    <h4>
                        {{ $referral->program->name }}
                    </h4>
                    <code style="background-color:#ddd">My&nbspReferral&nbspUrl</code>

                    <p style="margin-top:20px">{{ $referral->link }}</p>

                    <p class="form-control" value="Some text value..." 
                style="background-color:white;border-color:white">
                        This week Referrals count : {{ $referral->relationships()->count() }}
                    </p>
                @empty
                    No referrals
                @endforelse
            </div>
        </div>

        <div class="form-group row" style="padding-bottom:0px !impportant;margin-bottom:0px !impportant">
            <label class="col-7 col-form-label text-md-right">All time Earned &nbsp:&nbsp</label>
            <div class="col-5">
                <p class="form-control" value="Some text value..." 
                style="background-color:white;border-color:white">${{$alltimeBonous}}</p>
            </div>
        </div>
    </form>

<div class="row">
    <div class="col-12">
        <div class="card-box">
            <form >
                <div class="form-group ">
                    <!-- <label for="affiliate_id" class="col-md-4 col-form-label text-md-right">
                    AffiliateId</label> -->

                    <div class="col-md-8">
                        @forelse(auth()->user()->getReferrals() as $referral)
                            <h4>
                                {{ $referral->program->name }}
                            </h4>
                            <code style="background-color:#ddd">My&nbspReferral&nbspUrl</code>

                            <p style="margin-top:20px">{{ $referral->link }}</p>

                            <p style="font-size:18px">
                                This week Referrals count : {{ $referral->relationships()->count() }}
                            </p>
                        @empty
                            No referrals
                        @endforelse
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="col-5">
    <p class="form-control" value="Some text value..." 
    style="background-color:white;border-color:white">{{$alltimeReferrals}}</p>
</div>

private $start;
    private $end;

    public function setWeekPeriod($weeknumber)
    {
        $week_start = (new DateTime())->setISODate(date("Y"),$weeknumber)->format("Y-m-d H:i:s");

        $this->start = Carbon::createFromFormat("Y-m-d H:i:s", $week_start);
        $this->start->hour(0)->minute(0)->second(0);
        $this->end = $this->start->copy()->endOfWeek();
        dd($this->end = $this->start->copy()->endOfWeek());
    }

<!-- file upload -->

    $message = '';
        $dir_upload = 'upload/';
        $max_size = 200000000000;
        $file = $_FILES['example'];

        if ($file['size'] <= $max_size && $file['size'] > 0) 
        {
            $new_name = time() . '-' . $file['name'];
            $copied = copy($file['tmp_name'], $dir_upload . $new_name);

            if ($copied) 
            {
                $message = 'Ok!';
            } 
            else 
            {
                $message = 'Erro!';
            }
        } 
        else 
        {
            $message = 'Max file size 2mb!';
        }