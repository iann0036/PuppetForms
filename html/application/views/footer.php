    <div class="footer clearfix">
        <div class="pull-left">PuppetForms is created by <a target="_blank" href="http://ian.mn/">Ian Mckay</a></div>
        <div class="pull-right icons-group">
            <a data-toggle="modal" role="button" href="#debug_modal"><i class="icon-console"></i></a>
        </div>
    </div>

    <div id="debug_modal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><i class="icon-console"></i> Debug Console</h4>
                </div>

                <div class="modal-body with-padding">
                <pre id="debug" style="max-height: 450px;"><?php if (isset($debug)) {
                        if (is_string($debug))
                            echo $debug;
                        else
                            print_r($debug);
                    } else
                        echo "No debug available.";
                    ?></pre>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-warning" data-dismiss="modal"><i class="icon-cancel-circle"></i> Close</button>
                </div>
            </div>
        </div>
    </div>


</div>
</div>

</body>
</html>