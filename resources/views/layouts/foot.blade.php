            <footer class="footer">
                <div class="container-fluid">
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script> | inspired by nature with the love of technology for a better web experience.
                    </p>
                </div>
            </footer>
        </div>
    </div>
</body>

<!--   Core JS Files   -->
<script src="/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/js/material.min.js" type="text/javascript"></script>
<script src="/js/core.js" type="text/javascript"></script>

<!-- moment js -->
<script src="/js/moment.min.js" type="text/javascript"></script>

<!-- bootstrap datetimepicker -->
<script src="/js/bootstrap-datetimepicker.js"></script>

<!-- jquery dataTables -->
<script src="/js/dataTables.min.js" type="text/javascript"></script>
<!-- jQuery validate -->
<script src="/js/jquery.validate.min.js" type="text/javascript"></script>

<script src="/js/jquery.select-bootstrap.js" type="text/javascript"></script>
<script src="/js/jquery.tagsinput.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="/js/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="/js/bootstrap-notify.js"></script>
<!-- Sweet alert 2 -->
<script src="/js/sweetalert2.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="/js/material-dashboard.js?v=1.2.0"></script>
<script>
$(document).ready(function(){
        $(".clickable-row").click(function(){
            window.location = $(this).data("href");
});


$('table').dataTable({
    "ajax": "recharges/data",
    "serverSide": true
});

        
});
</script>

</html>