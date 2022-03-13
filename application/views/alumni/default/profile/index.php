<?php
    $_query = $this->vw_profile_m->get_by(array('user_id' => $this->session->userdata('user_id')));
    foreach ($_query as $key => $value);
?>
<style type="text/css" media="screen">
    .new_timeline .time {
        width: 10%;
        font-size: 0.75em;
        padding-top: 0.25em;
    }
</style>

            <div class="row clearfix">

                <div class="col-lg-4 col-md-12">
                    <div class="card profile-header">
                        <div class="body">
                            <div class="profile-image"> <img src="<?php echo base_url($value->img_url) ?>" class="rounded-circle" width="50%"> </div>
                            <div>
                                <h4 class="m-b-0"><?php echo $this->session->userdata('realname'); ?></h4>
                                <p class="m-b-0">
                                    <strong><?php echo $retVal = (!empty($value->nis)) ? $value->nis : '-' ; ?></strong>
                                </p>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <div class="col-lg-8 col-md-12">
                    <div class="row clearfix">

                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h2>Informasi</h2>
                                </div>
                                <div class="body">
                                    <small class="text-muted">Alamat: </small>
                                    <p><?php echo $retVal = (!empty($value->alamat)) ? $value->alamat : '-' ; ?></p>
                                    <hr>
                                    <small class="text-muted">Email: </small>
                                    <p><?php echo $this->session->userdata('email'); ?></p>                            
                                    <hr>
                                    <small class="text-muted">No. Telp: </small>
                                    <p><?php echo $retVal = (!empty($value->no_telp)) ? $value->no_telp : '-' ; ?></p>
                                    <hr>
                                    <small class="text-muted">Tempat Tanggal Lahir: </small>
                                    <p class="m-b-0"><?php echo $retVal = (!empty($value->ttlnya)) ? $value->ttlnya : '-' ; ?></p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="body">
                                    <div class="new_timeline m-b-20">
                                        <div class="header">
                                            <div class="color-overlay">
                                                <div class="day-number"></div>
                                                <div class="date-right">
                                                <div class="day-name">Akademik</div>
                                                <div class="month">T.A <?php echo $retVal = (!empty($value->ta_masuk)) ? $value->ta_masuk : '-' ; ?></div>
                                                </div>
                                            </div>                                
                                        </div>
                                        <ul>
                                            <li>
                                                <div class="bullet pink"></div>
                                                <div class="time"></div>
                                                <div class="desc">
                                                    <h3>Tahun Masuk</h3>
                                                    <h4><?php echo $retVal = (!empty($value->th_masuk)) ? $value->th_masuk.' - <b>T.A '.$value->ta_masuk.'</b>' : '-'  ?></h4>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="bullet green"></div>
                                                <div class="time"></div>
                                                <div class="desc">
                                                    <h3>Jurusan</h3>
                                                    <h4><?php echo $retVal = (!empty($value->jurusan)) ? $value->nama_jurusan.' ('.$value->kode_jurusan.')' : '-' ; ?></h4>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="bullet orange"></div>
                                                <div class="time"></div>
                                                <div class="desc">
                                                    <h3>Tahun Keluar</h3>
                                                    <h4><?php echo $retVal = (!empty($value->th_keluar)) ? $value->th_keluar.' - <b>T.A '.$value->ta_keluar.'</b>' : '-'  ?></h4>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>

<!-- Javascript -->
<script src="<?php echo $base_assets_url?>bundles/libscripts.bundle.js"></script>    
<script src="<?php echo $base_assets_url?>bundles/vendorscripts.bundle.js"></script>
<script src="<?php echo $base_assets_url?>bundles/knob.bundle.js"></script> <!-- Jquery Knob-->

<script src="<?php echo $base_assets_url?>bundles/mainscripts.bundle.js"></script>
<script src="<?php echo $base_assets_url?>bundles/morrisscripts.bundle.js"></script> <!-- Morris Plugin Js --> 
<script src="<?php echo $base_assets_url?>js/index.js"></script>
<script>
$(function () {
    $('.knob').knob({
        draw: function () {
            // "tron" case
            if (this.$.data('skin') == 'tron') {

                var a = this.angle(this.cv)  // Angle
                    , sa = this.startAngle          // Previous start angle
                    , sat = this.startAngle         // Start angle
                    , ea                            // Previous end angle
                    , eat = sat + a                 // End angle
                    , r = true;

                this.g.lineWidth = this.lineWidth;

                this.o.cursor
                    && (sat = eat - 0.3)
                    && (eat = eat + 0.3);

                if (this.o.displayPrevious) {
                    ea = this.startAngle + this.angle(this.value);
                    this.o.cursor
                        && (sa = ea - 0.3)
                        && (ea = ea + 0.3);
                    this.g.beginPath();
                    this.g.strokeStyle = this.previousColor;
                    this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false);
                    this.g.stroke();
                }

                this.g.beginPath();
                this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
                this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false);
                this.g.stroke();

                this.g.lineWidth = 2;
                this.g.beginPath();
                this.g.strokeStyle = this.o.fgColor;
                this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
                this.g.stroke();

                return false;
            }
        }
    });
});
</script>