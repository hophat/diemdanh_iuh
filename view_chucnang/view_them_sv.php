 

  <div class="modal modal-info fade" id="modal-info-<?=$hp['id_lophocphan']?>">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Thêm Sinh viên</h4>
                  </div>
                  <div class="modal-body" >

                  <li id="<?=$hp['id_lophocphan']?>" class="li_add_sv">
                    <input type="text" class="form-control width_24" id="textmssv" placeholder="mssv">
                    <input type="text" class="form-control width_24" id="texthodem" placeholder="ho dem">
                    <input type="text" class="form-control width_24" id="textten" placeholder="ten">
                    <input type="text" class="form-control width_24" id="textlop" placeholder="lop">
                </li>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-outline" data-dismiss="modal" onclick="themsv(<?=$hp['id_lophocphan']?>)">Save changes</button>
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
            </div>