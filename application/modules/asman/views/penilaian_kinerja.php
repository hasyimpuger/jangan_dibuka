<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Penilaian Kinerja Pegawai</h1>
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->

        <div class="row">
            <div class="col-lg-12">
   			    <?php if($this->session->flashdata('create')):?>
                    <div class="alert alert-info">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong><?php echo $this->session->flashdata('create'); ?></strong>
                    </div>
                <?php endif; ?>

   			<form action="<?=base_url()?>asman/penilaian_kinerja/create" class="form-horizontal" method="POST">
   				<div class="form-group">
                    <label class="col-md-2 control-label">Tahun</label>
                    <div class="col-md-4">
                        <div class="btn-group">
                            <button class="btn btn-md btn-default" disabled>
                                <?php 
                                    foreach($tahun as $r)
                                    {
                                        if($this->uri->segment(4) == $r->tahun)
                                        {
                                            echo $r->tahun; 
                                        }
                                    }
                                    if($this->uri->segment(4) == '')
                                    {
                                        echo "-- Pilih --";
                                    }
                                ?>
                            </button>
                            <button class="btn btn-md btn-default dropdown-toggle"  data-toggle="dropdown">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <?php foreach($tahun as $r): ?>
                                <li><a href="<?=base_url()?>asman/penilaian_kinerja/index/<?=$r->tahun?>"><?=$r->tahun?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Nama Pegawai</label>
                    <div class="col-md-4">
	                    <select name="id_nilai_pegawai" class="form-control">
		                    <option value="">-- Pilih --</option>
                            <?php foreach($penilaian as $r):?>
		                    <option value="<?=$r->id_nilai_pegawai?>">
                                <?php
                                    $this->load->model('detail_nilai_model','detail_nilai');
                                    $data = $this->detail_nilai->check_detail_nilai($r->id_nilai_pegawai);
                                    if($data != NULL)
                                    {
                                        echo $r->nama.' Sudah Dinilai';
                                    }
                                    else
                                    {
                                        echo $r->nama;
                                    }
                                ?>
                            </option>
                            <?php endforeach; ?>
		                </select>
	                </div>
                </div>

                <table class="table table-striped table-bordered table-hover">
                	<tr>
                		<th>#</th>
                		<th>Nama Kriteria</th>
                		<th>Bobot</th>
                	</tr>
                    <?php $i = 1; foreach ($tahun_kriteria as $r):?>
                	<tr>
                		<td><?=$i++?></td>
                		<td><input type="hidden" name="id_kriteria[]" value="<?=$r->id_kriteria?>"><?=$r->nama_kriteria?></td>
                		<td>
                            <div class="form-group">
                                <div class="col-xs-3">
                                    <input class="form-control" type="text" name="bobot_nilai[]">
                                </div>
                            </div>
                        </td>              
                	</tr>
                    <?php endforeach;?>
                	<tr>
                		<td colspan="3" align="center">
                			<button class="btn btn-md btn-primary" type="submit">Simpan</button>
                		</td>
                	</tr>
                </table>
                <!-- input hidden -->
                <input type="hidden" name="tahun" value="<?=$this->uri->segment(4)?>">
   			</form>

   			</div><!-- /.col-lg-8 -->

            <!-- <div class="col-lg-4">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Skala Bobot Nilai
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-hover">
                            <tr>
                                <td>#</td>
                                <td>Skala</td>
                                <td>Bobot</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Sangat Baik</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Baik</td>
                                <td>0.8</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Cukup</td>
                                <td>0.6</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Kurang</td>
                                <td>0.4</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Sangat Kurang</td>
                                <td>0.2</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div> -->

        </div><!-- /.row -->

    </div><!-- /.container-fluid -->
</div><!-- /#page-wrapper