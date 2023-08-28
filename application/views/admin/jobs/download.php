<html>
    <head>
        <meta charset="UTF-8">
        <title>Fusan Organics - JOBS</title>
    </head>
    <body>
        <style>
            table,  th {
                border: 1px solid #000000;
                border-collapse: collapse;
                font-size: 12px !important;
                padding: 5px;
            }
            td {
                padding: 3px 3px 3px 3px;
                font-size: 12px !important;
            }
        </style>
        <table style="width: 100%; text-align: center; overflow: wrap; border-bottom: 0px;">
            <tr>
                <th width="100%" style="color: #1167b1; font-size: 16px; line-height: 18px; padding: 2px; border-right: none;"><b> JOBS </b></th>
            </tr>
            <tr>
                <td style="font-size: 22px;"><b> Fusan Organics </b></td>
                <th rowspan="5" style="color: #1167b1; font-size: 12px; border-bottom: 0px;"><img src="<?php echo base_url(); ?>assets/images/brand/fusan-logo.jpg" alt="LOGO" style="width: 55%;"></th>
            </tr>
            <tr>
                <td style="border: none; font-size: 18px;">No: 6, Thiruneermalai Road, Nagalkeni, Chrompet, Chennai, Tamil Nadu - 600044.</td>
            </tr>
            <tr>
                <td style="font-size: 18px;"><b>Mobile Number :</b> +91 9444020561, <b>Email : </b> admin@fusan.in</td>
            </tr>
        </table>
        <table style="width: 100%; overflow: wrap;">
            <tr>
                <td width="60%" style="border: 1px solid; font-size: 12px; border-bottom: 0px;">
                    <table class="border-none" style="border: 0px; width: 100%; overflow: wrap;">
                        <tr>
                            <td style="font-size: 13px; color: #000000;"><b><?php echo $customer->name; ?></b></td>
                        </tr>
                        <tr>
                            <td style="font-size: 12px;"><?php echo $customer->address; ?></td>
                        </tr>
                        <tr>
                            <td style="font-size: 12px;"><b>+91 <?php echo $customer->phone_number; ?></b></td>
                        </tr>
                    </table>
                </td>
                <td width=40% style="border: 1px solid; font-size: 12px; border-bottom: 0px;">
                    <table style="border: 0px; width: 100%; overflow: wrap;">
                        <tr>
                            <td width="45%" style="border-bottom: 1px solid #000000; border-right: 1px solid #000000; font-size: 12px; color: #000000;"><b>Job No :</b></td>
                            <td  style="border-bottom: 1px solid #000000; font-size: 12px; text-align: right;"><b><?php echo 'JOB' . sprintf('%05d', $job->id); ?></b></td>
                        </tr>
                        <tr>
                            <td style="border-bottom: 1px solid #000000; border-right: 1px solid #000000; font-size: 12px; color: #000000;"><b>Job Date :</b></td>
                            <td  style="border-bottom: 1px solid #000000; font-size: 12px; text-align: right;">
                                <?php
                                $job_date = new DateTime($job->job_date);
                                echo $job_date->format('d-m-Y');
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-right: 1px solid #000000; font-size: 12px; color: #000000;"><b>Job Complete Date :</b></td>
                            <td  style="font-size: 12spx; text-align: right;">
                                <?php
                                $job_complete_date = new DateTime($job->job_complete_date);
                                echo $job_complete_date->format('d-m-Y');
                                ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <table style="width:100%; overflow: wrap; border-bottom: 0px;" autosize="1">
            <tr>
                <th><b>Style Number</b></th>
                <th width="30%"><b>Image</b></th>
                <th><b>Strip Size</b></th>
                <th width="25%"><b>Notes</b></th>
            </tr>
            <tr>
                <td style="border-right: 1px solid #000000; text-align: center; font-size: 11px;"><b><?php echo $job->style_number; ?></b></td>
                <td style="border-right: 1px solid #000000; text-align: center;">
                    <img src="<?php echo base_url(); ?>jobs-images/<?php echo $job->job_img; ?>" alt="LOGO" style="width: 27%;" />
                </td>
                <td style="border-right: 1px solid #000000; text-align: center; font-size: 11px;"><b><?php echo $job->strip_size; ?></b></td>
                <td style="border-right: 1px solid #000000; text-align: center; font-size: 11px;"><b><?php echo $job->notes; ?></b></td>
            </tr>
        </table>
        <table style="width:100%; overflow: wrap; border-top: 0px; border-bottom: 0px;" autosize="1">
            <tr>
                <th style="width: 8%">S.No</th>
                <th style="width: 15%; border-left: 0px; border-bottom: 1px solid #000000;">ART</th>
                <th style="width: 15%; border-right: 0px; border-left: 0px; border-bottom: 1px solid #000000;">Color</th>
                <?php foreach ($job_sizes as $item) { ?>
                    <th style="width: 9%; border-right: 0px;"><?php echo $item; ?></th>
                <?php } ?>
                <th style="width: 14%;">Total Pairs</th>
            </tr>
            <?php
            $total_pairs = 0;
            $job_items = json_decode($job->items, true);
            foreach ($job_items as $key2 => $item2) {
                $total_pairs = $total_pairs + $item2['total_pairs'];
                ?>
                <tr>
                    <td style="border-right: 1px solid #000000; border-bottom: 1px solid #000000; text-align: center; padding: 10px;"><?php echo ($key2 + 1); ?></td>
                    <td style="border-right: 1px solid #000000; border-bottom: 1px solid #000000; text-align: center; padding: 10px;"><b><?php echo $item2['art_number']; ?></b></td>
                    <td style="border-right: 1px solid #000000; border-bottom: 1px solid #000000; text-align: center; padding: 10px;">
                        <b>
                            <?php foreach ($colors as $color) { ?>
                                <?php echo $color['id'] === $item2['color_id'] ? $color['name'] : ''; ?>
                            <?php } ?>
                        </b>
                    </td>
                    <?php foreach ($job_sizes as $key => $item) { ?>
                        <td style="border-right: 1px solid #000000; border-bottom: 1px solid #000000; text-align: center; padding: 10px;"><?php echo $item2['items'][$key]; ?></td>
                    <?php } ?>
                    <td style="border-right: 1px solid #000000; border-bottom: 1px solid #000000; text-align: center; padding: 10px;"><b><?php echo $item2['total_pairs']; ?></b></td>
                </tr>
            <?php } ?>
            <tr>
                <td colspan="<?php echo (count($job_sizes) + 3); ?>" style="border-right: 1px solid #000000; border-bottom: 1px solid #000000; text-align: right; padding: 10px;"><b>Total</b></td>
                <td style="border-right: 1px solid #000000; border-bottom: 1px solid #000000; text-align: center; padding: 10px;"><b><?php echo $total_pairs; ?></b></td>
            </tr>
            <tr>
                <td colspan="<?php echo (count($job_sizes) + 3); ?>" style="border-right: 1px solid #000000; border-bottom: 1px solid #000000; text-align: right; padding: 10px;"><b>QC Checked</b></td>
                <td style="border-right: 1px solid #000000; border-bottom: 1px solid #000000; text-align: center; padding: 10px;"></td>
            </tr>
            <tr>
                <td colspan="<?php echo (count($job_sizes) + 3); ?>" style="border-right: 1px solid #000000; border-bottom: 1px solid #000000; text-align: right; padding: 10px;"><b>Total Pairs Approved</b></td>
                <td style="border-right: 1px solid #000000; border-bottom: 1px solid #000000; text-align: center; padding: 10px;"></td>
            </tr>
            <tr>
                <td colspan="<?php echo (count($job_sizes) + 3); ?>" style="border-right: 1px solid #000000; border-bottom: 0px; text-align: right; padding: 10px;"><b>Total Pairs Rejected</b></td>
                <td style="border-right: 1px solid #000000; border-bottom: 1px solid #000000; text-align: center; padding: 10px; border-bottom: 0px"></td>
            </tr>
        </table>
        <table style="width: 100%; overflow: wrap; border-top: 0px; border-bottom: 0px;">
            <tr>
                <td width="50%" style="border: 1px solid; border-bottom: 0px; font-size: 12px; margin-bottom: 50px; padding-bottom: 60px;">
                    <b>Remarks</b>
                    <br /><br />
                    <?php echo $job->remarks; ?>
                </td>
                <td width="50%" style="border: 1px solid; border-bottom: 0px; font-size: 12px; margin-bottom: 50px; padding-bottom: 60px; text-align: center; color: blue;"><b>For Fusan Organics</b></td>
            <tr>
            <tr>
                <td width="50%" style="border-top: none; border-right: 1px solid; font-size: 12px;"></td>
                <td width="50%" style="border-top: none; border-right: 1px solid; font-size: 12px; text-align: center">Authorised Signatory</td>
            </tr>
        </table>
        <table style="width: 100%; overflow: wrap;">
            <tr>
                <td style="border-top: 1px solid; text-align: center; font-size: 12px;" colspan="2"> This is computer generated jobs, Does not require signature<td>
            </tr>
        </table>
    </body>
</html>