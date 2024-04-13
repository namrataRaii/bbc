<!DOCTYPE html>
<html>

<head>
    <title>Pagination Example</title>
    <style>
        /* Pagination container */
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        /* Individual pagination links */
        .pagination a {
            color: #333;
            padding: 2px 12px;
            text-decoration: none;
            height: 34px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin: 2px;
        }

        /* Active page link */
        .pagination .active {
            background-color: #007bff;
            color: #fff;
            border: 1px solid #007bff;
        }

        /* First page link */
        .pagination .first {
            color: #007bff;
            background-color: #fff;
            border: 1px solid #ccc;
        }

        /* Previous and Next links */
        .pagination .prev,
        .pagination .next {
            font-weight: bold;
        }

        /* Last page link (optional) */
        .pagination .last {
            font-weight: bold;
        }

        /* Disabled links (e.g., when on the first or last page) */
        .pagination .disabled {
            pointer-events: none;
            background-color: #ccc;
            color: #777;
            border: 1px solid #ccc;
        }

        strong {
            color: black;
            padding: 2px 12px;
            text-decoration: none;
            height: 34px;
            border: 2px solid #0F6AAD;
            border-radius: 4px;
            margin: 2px;
            box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            // Attach an event listener to pagination links
            $('.pagination a').on('click', function (e) {
                e.preventDefault();
                var url = $(this).attr('href');

                // Make an AJAX request to the server to fetch the next set of data
                $.ajax({
                    type: 'GET',
                    url: url,
                    dataType: 'html',
                    success: function (response) {
                        $('#your-data-container').html(response);
                    },
                    error: function () {
                        alert('Error loading data.');
                    }
                });
            });
        });
    </script>
</head>

<body>
    <div id="your-data-container">
        <!-- Data will be loaded here via AJAX -->
        <?php

        $data = '<section class="" id=""><div class="col-md-12"><div class="brand-logo-wrapper pb-0 pt-5 section-padding fix wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s"><div class="row mb-4">';
        foreach ($your_data as $publications) {
            $data .= '<div class="col-4 mb-4"><div class="card">';

            $data .= '<div class="campaign-box">
                        <div class="blog-item">
                            <div class="blog-thumb">
                                <a href=' . base_url('publicationdetails/' . $publications->id) . ' >';

            if (empty($publications->publication_thumbnail)) {
                $data .= '<img src="' . base_url('website_assets/img/l-&-d/noimage.png') . '" height="200" alt="">';
            } else {
                $data .= '<img src="' . base_url('uploads/' . $publications->publication_thumbnail) . '" alt="blog thumb">';
            }

            $data .= '</a>
            <p>' . $publications->publication_type . '</p>
            </div>
                            <div class="case-content">  
                                <h3 class="blog-title">
                                    <a>' . $publications->publication_title . '</a>
                                </h3>
                                <p><a href="' . base_url('uploads/') . $publications->publication_document . '" target="_blank">Read More</a></p> 
                            </div>
                        </div>
                    </div>';
            $data .= '</div></div>';
        }
        $data .= '<div class="pagination">' . $this->pagination->create_links() . '
    </div>';
        $data .= '</div></div></div></section>';

        print_r($data);

        ?>
    </div>
</body>

</html>