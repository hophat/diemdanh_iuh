<?php

 if(!empty($_GET['ma_HP'])) {

    $id_lophocphan=$_GET['ma_HP'];

  //$id_lophocphan='123';
  $result = GET_DAYS( $id_lophocphan);  
 
  foreach ($result as $key => $value) {
    # code...
    $value = date_create($value);
    $value = date_format($value,'d/m/Y');
    $value = substr($value,0,5);
    $days[$key] =  $value ;
  }

  $title_hp = SHOW_TT_HP($id_gv,$id_lophocphan);
  $title_hp = $title_hp[0];

?>
<style type="text/css">
  

</style>
     <div class="box-header" >
        <h3 class="box-title" style="font-size: x-large;font-weight: 600;color: #2196F3; float:left;">
          <?=$title_hp['tenhocphan']?>(<?=$title_hp['ten_lop']?>)
        </h3>
    </div>       
      <div class="box-body">
         <div class="row">
          <div class="col-sm-12">
           <table  class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info" id="bangdiemdanh">
           <thead>
            <tr role="row" >
                     <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 3%;" >STT</th>
                     <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 10%;" >Mã sinh viên</th><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 15%;">Họ tên</th>
                     <?php
                     $i=1;
                      while ( $i <= 15) {
                     ?>
                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" ><?=$days['buoi'.$i]?></th>
                    <?php
                      $i++;
                    }?>
            </thead>
            <tbody >
              <?php
                 $stt=0;
                  $sinhvien = SHOW_TT_DIEMDANH($id_lophocphan);
                  foreach ($sinhvien as $row ) {
                      $stt += 1;
                      $i    = 1;
                      while ( $i <= 15) {
                          if ($row['buoi'.$i] != null) {
                             if ($row['buoi'.$i]=='0000-00-00') {
                                $row['buoi'.$i]='<i class="fa fa-fw fa-close "style="color:red; font-size: 150%;"></i>';
                                $row['buoi'.$i]='0';
                              }
                              else {
                                $row['buoi'.$i]='<i class="fa fa-fw fa-check" style="color:green; font-size: 150%;"></i>';
                                $row['buoi'.$i]='1';
                              }
                          }
                           $i++;
                      }

                      ?>
                     <tr  role="row" class="odd" >
                          <td class="sorting_1"><?=$stt?></td>
                          <td name="mssv"> <?=$row['mssv']?> </td>
                          <td> <?=$row['hodem']?> <?=$row['ten']?></td>
                      <?php
                          $i=1;
                          while ( $i <= 15) {
                             if ($row['buoi'.$i]=='1') {
                              $class = 'co';
                             }
                             if ($row['buoi'.$i]=='0') {
                              $class = 'khong';
                             } 
                             if ($row['buoi'.$i]==null) {
                              $class = '';
                             } 
                      ?>
                           <td class="center"> 
                            <select id="<?=$row['mssv']?><?=$i?>" class = "check_dd <?=$class?> "  onchange="UPDATE_dd_cutoms(<?=$row['mssv']?><?=$i?>,<?=$row['mssv']?>,<?=$i?>)">
                              <option class="" name="buoi" value="null" <?php if($row['buoi'.$i]==null){echo 'selected="selected"';} ?> >
                                
                              </option>

                              <option  class="khong" name="buoi" value="2" <?php if($row['buoi'.$i]=='0'){echo 'selected="selected"';} ?> >
                              &#xf00d;
                              </option> 

                              <option class="co" name="buoi" value="1" <?php if($row['buoi'.$i]=='1'){echo 'selected="selected"';} ?> >
                                &#xf00c;
                              </option>
                              
                            </select>
                            </td>
                        <?php
                                $i++;
                          }?>
                      </tr>
                <?php
                 // }
                }?>
                  </tbody >            
                  <tfoot>
                </tfoot>
              </table></div></div> </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    <div>

<?php }?>
<?php
  if (isset($_POST['submit_dd'])) {

  }

?>
<script type="text/javascript">

  function UPDATE_dd_cutoms(stt, mssv, buoi)
  {
    var  id     = '#'+stt;  
    var kq  = $(id).val();
   // alert(kq);
    $.post(
          "http://localhost/diemdanh/php/ajax/chinhsua_dd.php",
            {
              mssv    :   mssv,
              buoi    :   buoi,
              loai_dd :   kq, 
              id_lophocphan:'<?=$id_lophocphan?>'
            },
            function( data ) 
            {
               if (data === '1') {
                location.reload();
               }
            }
          );
  }

</script>