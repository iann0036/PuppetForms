    <div class="footer clearfix">
        <div class="pull-left"></div>
        <div class="pull-right icons-group">
            <a data-toggle="modal" role="button" href="#debug_modal"><i class="icon-info"></i></a>
        </div>
    </div>

    <div id="debug_modal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><i class="icon-info"></i> About PuppetForms</h4>
                </div>

                <div class="modal-body with-padding">
                    <h6>Author</h6>
                    <p>PuppetForms is created by <a target="_blank" href="http://ian.mn/">Ian Mckay</a>. Feedback is appreciated.</p><br />
                    <h6>License</h6>
                    <pre style="max-height: 450px;">
The MIT License (MIT)

Copyright (c) 2014 Ian Mckay &lt;contact@ian.mn&gt;

Permission is hereby granted, free of charge, to any person obtaining a
copy of this software and associated documentation files (the "Software"),
to deal in the Software without restriction, including without limitation
the rights to use, copy, modify, merge, publish, distribute, sublicense,
and/or sell copies of the Software, and to permit persons to whom the
Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
DEALINGS IN THE SOFTWARE.
</pre>
                    <?php if (isset($debug)) {
                        echo '<hr /><h6>Debug</h6><pre>';
                        if (is_string($debug))
                            echo $debug;
                        else
                            print_r($debug);
                        echo '</pre>';
                    }
                    ?>
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