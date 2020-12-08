<div class="panel panel-default" style="    border: 1px solid #000;
    border-radius: 7px;
    background: #eeeeee59;
    font-weight: bold;">
    <div class="panel-body">
        <table class="table table-hover">

            <tr>
                <td colspan="4" class="text_right">
                    SUB TOTAL
                </td>
                <td class=" amount numbertext">
                    {{globleCartData.sub_total_price|currency:"<?php echo globle_currency; ?>"}}
                </td>
                <td></td>
            </tr>

            <tr>
                <td colspan="4" class="text_right">
                    <p style="    
                       float: left;
                       line-height: 11px;
                       color: red;
                       font-size: 14px;
                       font-weight: 800;
                       /* padding-top: 12px; */
                       /* padding-top: 12px; */
                       margin-bottom: 0;

                       ">
                        {{globleCartData.discount_note}}
                    </p>     DISCOUNT
                </td>
                <td class=" amount numbertext">
                    {{globleCartData.discount|currency:"<?php echo globle_currency; ?>"}}
                </td>
                <td></td>
            </tr>

            <tr>
                <td colspan="4" class="text_right">
                    <p style="    
                       float: left;
                       line-height: 11px;
                       color: red;
                       font-size: 14px;
                       font-weight: 800;
                       /* padding-top: 12px; */
                       /* padding-top: 12px; */
                       margin-bottom: 0;

                       ">
                        {{globleCartData.shipping_note}}
                    </p>  SHIPPING 
                </td>
                <td class=" amount">
                    {{globleCartData.shipping_price|currency:"<?php echo globle_currency; ?>"}}
                </td>
                <td></td>
            </tr>
            <tr>
                <td colspan="4" class="text_right">
                    TOTAL
                </td>
                <td class=" amount">
                    {{globleCartData.total_price|currency:"<?php echo globle_currency; ?>"}}
                </td>
                <td></td>
            </tr>
        </table>
    </div>
</div>