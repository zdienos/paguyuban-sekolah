                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->

                <!-- footer @s -->
                <div class="nk-footer">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright"> &copy;2022 amsTSM - Asset Management System by <a href="https://ams.transstudiomall.com" target="_blank">TSM</a>
                            </div>                            
                        </div>
                    </div>
                </div>
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->   

    <div class="flash-status" data-status="<?= $this->session->flashdata('login_status'); ?>"></div>
    

    <!-- JavaScript -->
    <script src="./assets/js/bundle.js?ver=3.0.0"></script>
    <script src="./assets/js/scripts.js?ver=3.0.0"></script>
    <script src="./assets/js/libs/datatable-btns.js?ver=3.0.0"></script>

    <!-- Custom JS untuk keperluan sendiri -->
    <script src="./js/custom.js"></script>
    
    <script>
        $(document).ready(function(){
            let statusmenu = $('.flash-status').data('status');
            if (!statusmenu==''){                
                pesan('success',statusmenu);
            }            
        });
    </script>