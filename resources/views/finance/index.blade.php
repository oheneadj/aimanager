<x-app-layout>
    <div class="container-xxl flex-grow-1 container-p-y">




        <div class="row">
            <div class="col-md-12 col-lg-4 mb-4">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-8">
                            <div class="card-body">
                                <h6 class="card-title text-nowrap mb-1">Congratulations {{ Auth()->user()->first_name }}
                                </h6>
                                <small class="d-block text-nowrap mb-3">Best seller of the month</small>

                                <h5 class="card-title text-primary mb-1">
                                    Ghc
                                    {{ $finances->where('income_or_expense', 'income')->sum('amount') - $finances->where('income_or_expense', 'expense')->sum('amount') }}
                                </h5>
                                <small class="d-block text-muted mb-4 pb-1">78% of target</small>

                                <a href="javascript:;" class="btn btn-sm btn-primary">View sales</a>
                            </div>
                        </div>
                        <div class="col-4 ps-0 pt-3">
                            <img src="/assets/img/illustrations/prize-light.png" width="90" height="140"
                                class="rounded-start" alt="View Sales">
                        </div>
                    </div>
                </div>
            </div>
            <!-- New Visitors & Activity -->
            <div class="col-lg-8 mb-4">
                <div class="card">
                    <div class="card-body row g-4">
                        <div class="col-md-6 pe-md-4 card-separator">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <h5 class="mb-0">New Visitors</h5>
                                <small>Last Week</small>
                            </div>
                            <div class="d-flex justify-content-between" style="position: relative;">
                                <div class="mt-auto">
                                    <h2 class="mb-2">23%</h2>
                                    <small class="text-danger text-nowrap fw-medium"><i
                                            class="bx bx-down-arrow-alt"></i> -13.24%</small>
                                </div>
                                <div id="visitorsChart" style="min-height: 120px;">
                                    <div id="apexchartsyeo0cqel"
                                        class="apexcharts-canvas apexchartsyeo0cqel apexcharts-theme-light"
                                        style="width: 200px; height: 120px;"><svg id="SvgjsSvg1633" width="200"
                                            height="120" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                            style="background: transparent;">
                                            <g id="SvgjsG1635" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(22, 5)">
                                                <defs id="SvgjsDefs1634">
                                                    <linearGradient id="SvgjsLinearGradient1638" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1639" stop-opacity="0.4"
                                                            stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                        <stop id="SvgjsStop1640" stop-opacity="0.5"
                                                            stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                        <stop id="SvgjsStop1641" stop-opacity="0.5"
                                                            stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                    </linearGradient>
                                                    <clipPath id="gridRectMaskyeo0cqel">
                                                        <rect id="SvgjsRect1643" width="172" height="89.348"
                                                            x="-2" y="0" rx="0" ry="0"
                                                            opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskyeo0cqel"></clipPath>
                                                    <clipPath id="nonForecastMaskyeo0cqel"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskyeo0cqel">
                                                        <rect id="SvgjsRect1644" width="172" height="93.348"
                                                            x="-2" y="-2" rx="0" ry="0"
                                                            opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <rect id="SvgjsRect1642" width="12" height="89.348" x="0"
                                                    y="0" rx="0" ry="0" opacity="1"
                                                    stroke-width="0" stroke-dasharray="3"
                                                    fill="url(#SvgjsLinearGradient1638)"
                                                    class="apexcharts-xcrosshairs" y2="89.348" filter="none"
                                                    fill-opacity="0.9"></rect>
                                                <g id="SvgjsG1663" class="apexcharts-xaxis"
                                                    transform="translate(0, 0)">
                                                    <g id="SvgjsG1664" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)"><text id="SvgjsText1666"
                                                            font-family="Helvetica, Arial, sans-serif" x="12"
                                                            y="118.348" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px"
                                                            font-weight="400" fill="#a1acb8"
                                                            class="apexcharts-text apexcharts-xaxis-label"
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1667">M</tspan>
                                                            <title>M</title>
                                                        </text><text id="SvgjsText1669"
                                                            font-family="Helvetica, Arial, sans-serif" x="36"
                                                            y="118.348" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px"
                                                            font-weight="400" fill="#a1acb8"
                                                            class="apexcharts-text apexcharts-xaxis-label"
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1670">T</tspan>
                                                            <title>T</title>
                                                        </text><text id="SvgjsText1672"
                                                            font-family="Helvetica, Arial, sans-serif" x="60"
                                                            y="118.348" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px"
                                                            font-weight="400" fill="#a1acb8"
                                                            class="apexcharts-text apexcharts-xaxis-label"
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1673">W</tspan>
                                                            <title>W</title>
                                                        </text><text id="SvgjsText1675"
                                                            font-family="Helvetica, Arial, sans-serif" x="84"
                                                            y="118.348" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px"
                                                            font-weight="400" fill="#a1acb8"
                                                            class="apexcharts-text apexcharts-xaxis-label"
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1676">T</tspan>
                                                            <title>T</title>
                                                        </text><text id="SvgjsText1678"
                                                            font-family="Helvetica, Arial, sans-serif" x="108"
                                                            y="118.348" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px"
                                                            font-weight="400" fill="#a1acb8"
                                                            class="apexcharts-text apexcharts-xaxis-label"
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1679">F</tspan>
                                                            <title>F</title>
                                                        </text><text id="SvgjsText1681"
                                                            font-family="Helvetica, Arial, sans-serif" x="132"
                                                            y="118.348" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px"
                                                            font-weight="400" fill="#a1acb8"
                                                            class="apexcharts-text apexcharts-xaxis-label"
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1682">S</tspan>
                                                            <title>S</title>
                                                        </text><text id="SvgjsText1684"
                                                            font-family="Helvetica, Arial, sans-serif" x="156"
                                                            y="118.348" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px"
                                                            font-weight="400" fill="#a1acb8"
                                                            class="apexcharts-text apexcharts-xaxis-label"
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1685">S</tspan>
                                                            <title>S</title>
                                                        </text></g>
                                                </g>
                                                <g id="SvgjsG1688" class="apexcharts-grid">
                                                    <g id="SvgjsG1689" class="apexcharts-gridlines-horizontal"
                                                        style="display: none;">
                                                        <line id="SvgjsLine1691" x1="0" y1="0"
                                                            x2="168" y2="0" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1692" x1="0" y1="17.8696"
                                                            x2="168" y2="17.8696" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1693" x1="0" y1="35.7392"
                                                            x2="168" y2="35.7392" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1694" x1="0"
                                                            y1="53.608799999999995" x2="168"
                                                            y2="53.608799999999995" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1695" x1="0" y1="71.4784"
                                                            x2="168" y2="71.4784" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1696" x1="0"
                                                            y1="89.34799999999998" x2="168"
                                                            y2="89.34799999999998" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1690" class="apexcharts-gridlines-vertical"
                                                        style="display: none;"></g>
                                                    <line id="SvgjsLine1698" x1="0" y1="89.348"
                                                        x2="168" y2="89.348" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    <line id="SvgjsLine1697" x1="0" y1="1"
                                                        x2="0" y2="89.348" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                </g>
                                                <g id="SvgjsG1645"
                                                    class="apexcharts-bar-series apexcharts-plot-series">
                                                    <g id="SvgjsG1646" class="apexcharts-series" rel="1"
                                                        seriesName="seriesx1" data:realIndex="0">
                                                        <path id="SvgjsPath1650"
                                                            d="M 6 81.348L 6 61.6088Q 6 53.6088 14 53.6088L 10 53.6088Q 18 53.6088 18 61.6088L 18 61.6088L 18 81.348Q 18 89.348 10 89.348L 14 89.348Q 6 89.348 6 81.348z"
                                                            fill="#666ee81a" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-bar-area"
                                                            index="0" clip-path="url(#gridRectMaskyeo0cqel)"
                                                            pathTo="M 6 81.348L 6 61.6088Q 6 53.6088 14 53.6088L 10 53.6088Q 18 53.6088 18 61.6088L 18 61.6088L 18 81.348Q 18 89.348 10 89.348L 14 89.348Q 6 89.348 6 81.348z"
                                                            pathFrom="M 6 81.348L 6 81.348L 18 81.348L 18 81.348L 18 81.348L 18 81.348L 18 81.348L 6 81.348"
                                                            cy="53.6088" cx="30" j="0"
                                                            val="40" barHeight="35.7392" barWidth="12"></path>
                                                        <path id="SvgjsPath1652"
                                                            d="M 30 81.348L 30 12.467399999999998Q 30 4.467399999999998 38 4.467399999999998L 34 4.467399999999998Q 42 4.467399999999998 42 12.467399999999998L 42 12.467399999999998L 42 81.348Q 42 89.348 34 89.348L 38 89.348Q 30 89.348 30 81.348z"
                                                            fill="#666ee81a" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-bar-area"
                                                            index="0" clip-path="url(#gridRectMaskyeo0cqel)"
                                                            pathTo="M 30 81.348L 30 12.467399999999998Q 30 4.467399999999998 38 4.467399999999998L 34 4.467399999999998Q 42 4.467399999999998 42 12.467399999999998L 42 12.467399999999998L 42 81.348Q 42 89.348 34 89.348L 38 89.348Q 30 89.348 30 81.348z"
                                                            pathFrom="M 30 81.348L 30 81.348L 42 81.348L 42 81.348L 42 81.348L 42 81.348L 42 81.348L 30 81.348"
                                                            cy="4.467399999999998" cx="54" j="1"
                                                            val="95" barHeight="84.8806" barWidth="12"></path>
                                                        <path id="SvgjsPath1654"
                                                            d="M 54 81.348L 54 43.739200000000004Q 54 35.739200000000004 62 35.739200000000004L 58 35.739200000000004Q 66 35.739200000000004 66 43.739200000000004L 66 43.739200000000004L 66 81.348Q 66 89.348 58 89.348L 62 89.348Q 54 89.348 54 81.348z"
                                                            fill="#666ee81a" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-bar-area"
                                                            index="0" clip-path="url(#gridRectMaskyeo0cqel)"
                                                            pathTo="M 54 81.348L 54 43.739200000000004Q 54 35.739200000000004 62 35.739200000000004L 58 35.739200000000004Q 66 35.739200000000004 66 43.739200000000004L 66 43.739200000000004L 66 81.348Q 66 89.348 58 89.348L 62 89.348Q 54 89.348 54 81.348z"
                                                            pathFrom="M 54 81.348L 54 81.348L 66 81.348L 66 81.348L 66 81.348L 66 81.348L 66 81.348L 54 81.348"
                                                            cy="35.739200000000004" cx="78" j="2"
                                                            val="60" barHeight="53.608799999999995"
                                                            barWidth="12"></path>
                                                        <path id="SvgjsPath1656"
                                                            d="M 78 81.348L 78 57.141400000000004Q 78 49.141400000000004 86 49.141400000000004L 82 49.141400000000004Q 90 49.141400000000004 90 57.141400000000004L 90 57.141400000000004L 90 81.348Q 90 89.348 82 89.348L 86 89.348Q 78 89.348 78 81.348z"
                                                            fill="#666ee81a" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-bar-area"
                                                            index="0" clip-path="url(#gridRectMaskyeo0cqel)"
                                                            pathTo="M 78 81.348L 78 57.141400000000004Q 78 49.141400000000004 86 49.141400000000004L 82 49.141400000000004Q 90 49.141400000000004 90 57.141400000000004L 90 57.141400000000004L 90 81.348Q 90 89.348 82 89.348L 86 89.348Q 78 89.348 78 81.348z"
                                                            pathFrom="M 78 81.348L 78 81.348L 90 81.348L 90 81.348L 90 81.348L 90 81.348L 90 81.348L 78 81.348"
                                                            cy="49.141400000000004" cx="102" j="3"
                                                            val="45" barHeight="40.206599999999995"
                                                            barWidth="12"></path>
                                                        <path id="SvgjsPath1658"
                                                            d="M 102 81.348L 102 16.93480000000001Q 102 8.93480000000001 110 8.93480000000001L 106 8.93480000000001Q 114 8.93480000000001 114 16.93480000000001L 114 16.93480000000001L 114 81.348Q 114 89.348 106 89.348L 110 89.348Q 102 89.348 102 81.348z"
                                                            fill="#666ee81a" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-bar-area"
                                                            index="0" clip-path="url(#gridRectMaskyeo0cqel)"
                                                            pathTo="M 102 81.348L 102 16.93480000000001Q 102 8.93480000000001 110 8.93480000000001L 106 8.93480000000001Q 114 8.93480000000001 114 16.93480000000001L 114 16.93480000000001L 114 81.348Q 114 89.348 106 89.348L 110 89.348Q 102 89.348 102 81.348z"
                                                            pathFrom="M 102 81.348L 102 81.348L 114 81.348L 114 81.348L 114 81.348L 114 81.348L 114 81.348L 102 81.348"
                                                            cy="8.93480000000001" cx="126" j="4"
                                                            val="90" barHeight="80.41319999999999"
                                                            barWidth="12"></path>
                                                        <path id="SvgjsPath1660"
                                                            d="M 126 81.348L 126 52.674Q 126 44.674 134 44.674L 130 44.674Q 138 44.674 138 52.674L 138 52.674L 138 81.348Q 138 89.348 130 89.348L 134 89.348Q 126 89.348 126 81.348z"
                                                            fill="rgba(105,108,255,0.85)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="0" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskyeo0cqel)"
                                                            pathTo="M 126 81.348L 126 52.674Q 126 44.674 134 44.674L 130 44.674Q 138 44.674 138 52.674L 138 52.674L 138 81.348Q 138 89.348 130 89.348L 134 89.348Q 126 89.348 126 81.348z"
                                                            pathFrom="M 126 81.348L 126 81.348L 138 81.348L 138 81.348L 138 81.348L 138 81.348L 138 81.348L 126 81.348"
                                                            cy="44.674" cx="150" j="5"
                                                            val="50" barHeight="44.674" barWidth="12"></path>
                                                        <path id="SvgjsPath1662"
                                                            d="M 150 81.348L 150 30.337000000000003Q 150 22.337000000000003 158 22.337000000000003L 154 22.337000000000003Q 162 22.337000000000003 162 30.337000000000003L 162 30.337000000000003L 162 81.348Q 162 89.348 154 89.348L 158 89.348Q 150 89.348 150 81.348z"
                                                            fill="#666ee81a" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-bar-area"
                                                            index="0" clip-path="url(#gridRectMaskyeo0cqel)"
                                                            pathTo="M 150 81.348L 150 30.337000000000003Q 150 22.337000000000003 158 22.337000000000003L 154 22.337000000000003Q 162 22.337000000000003 162 30.337000000000003L 162 30.337000000000003L 162 81.348Q 162 89.348 154 89.348L 158 89.348Q 150 89.348 150 81.348z"
                                                            pathFrom="M 150 81.348L 150 81.348L 162 81.348L 162 81.348L 162 81.348L 162 81.348L 162 81.348L 150 81.348"
                                                            cy="22.337000000000003" cx="174" j="6"
                                                            val="75" barHeight="67.011" barWidth="12"></path>
                                                        <g id="SvgjsG1648" class="apexcharts-bar-goals-markers"
                                                            style="pointer-events: none">
                                                            <g id="SvgjsG1649"
                                                                className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG1651"
                                                                className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG1653"
                                                                className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG1655"
                                                                className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG1657"
                                                                className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG1659"
                                                                className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG1661"
                                                                className="apexcharts-bar-goals-groups"></g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1647" class="apexcharts-datalabels"
                                                        data:realIndex="0"></g>
                                                </g>
                                                <line id="SvgjsLine1699" x1="0" y1="0"
                                                    x2="168" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1700" x1="0" y1="0"
                                                    x2="168" y2="0" stroke-dasharray="0"
                                                    stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG1701" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG1702" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG1703" class="apexcharts-point-annotations"></g>
                                            </g>
                                            <g id="SvgjsG1686" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-8, 0)">
                                                <g id="SvgjsG1687" class="apexcharts-yaxis-texts-g"></g>
                                            </g>
                                            <g id="SvgjsG1636" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend" style="max-height: 60px;"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-title"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            </div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgba(102, 110, 232, 0.1);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 414px; height: 121px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 ps-md-4">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <h5 class="mb-0">Activity</h5>
                                <small>Last Week</small>
                            </div>
                            <div class="d-flex justify-content-between" style="position: relative;">
                                <div class="mt-auto">
                                    <h2 class="mb-2">82%</h2>
                                    <small class="text-success text-nowrap fw-medium"><i
                                            class="bx bx-up-arrow-alt"></i> 24.8%</small>
                                </div>
                                <div id="activityChart" style="min-height: 120px;">
                                    <div id="apexchartsv4kwkxw3"
                                        class="apexcharts-canvas apexchartsv4kwkxw3 apexcharts-theme-light"
                                        style="width: 220px; height: 120px;"><svg id="SvgjsSvg1705" width="220"
                                            height="120" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                            transform="translate(0, 0)" style="background: transparent;">
                                            <g id="SvgjsG1707" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(22, 10)">
                                                <defs id="SvgjsDefs1706">
                                                    <clipPath id="gridRectMaskv4kwkxw3">
                                                        <rect id="SvgjsRect1712" width="194" height="82.348"
                                                            x="-3" y="-1" rx="0"
                                                            ry="0" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0" fill="#fff">
                                                        </rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskv4kwkxw3"></clipPath>
                                                    <clipPath id="nonForecastMaskv4kwkxw3"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskv4kwkxw3">
                                                        <rect id="SvgjsRect1713" width="192" height="84.348"
                                                            x="-2" y="-2" rx="0"
                                                            ry="0" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0" fill="#fff">
                                                        </rect>
                                                    </clipPath>
                                                    <linearGradient id="SvgjsLinearGradient1718" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1719" stop-opacity="0.8"
                                                            stop-color="rgba(113,221,55,0.8)" offset="0"></stop>
                                                        <stop id="SvgjsStop1720" stop-opacity="0.25"
                                                            stop-color="rgba(227,248,215,0.25)" offset="0.85"></stop>
                                                        <stop id="SvgjsStop1721" stop-opacity="0.25"
                                                            stop-color="rgba(227,248,215,0.25)" offset="1"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <line id="SvgjsLine1711" x1="0" y1="0"
                                                    x2="0" y2="80.348" stroke="#b6b6b6"
                                                    stroke-dasharray="3" stroke-linecap="butt"
                                                    class="apexcharts-xcrosshairs" x="0" y="0"
                                                    width="1" height="80.348" fill="#b1b9c4" filter="none"
                                                    fill-opacity="0.9" stroke-width="1"></line>
                                                <g id="SvgjsG1724" class="apexcharts-xaxis"
                                                    transform="translate(0, 0)">
                                                    <g id="SvgjsG1725" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)"><text id="SvgjsText1727"
                                                            font-family="Helvetica, Arial, sans-serif" x="0"
                                                            y="109.348" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px"
                                                            font-weight="400" fill="#a1acb8"
                                                            class="apexcharts-text apexcharts-xaxis-label"
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1728">A1</tspan>
                                                            <title>A1</title>
                                                        </text><text id="SvgjsText1730"
                                                            font-family="Helvetica, Arial, sans-serif" x="23.5"
                                                            y="109.348" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px"
                                                            font-weight="400" fill="#a1acb8"
                                                            class="apexcharts-text apexcharts-xaxis-label"
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1731">A2</tspan>
                                                            <title>A2</title>
                                                        </text><text id="SvgjsText1733"
                                                            font-family="Helvetica, Arial, sans-serif" x="47"
                                                            y="109.348" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px"
                                                            font-weight="400" fill="#a1acb8"
                                                            class="apexcharts-text apexcharts-xaxis-label"
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1734">A3</tspan>
                                                            <title>A3</title>
                                                        </text><text id="SvgjsText1736"
                                                            font-family="Helvetica, Arial, sans-serif" x="70.5"
                                                            y="109.348" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px"
                                                            font-weight="400" fill="#a1acb8"
                                                            class="apexcharts-text apexcharts-xaxis-label"
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1737">A4</tspan>
                                                            <title>A4</title>
                                                        </text><text id="SvgjsText1739"
                                                            font-family="Helvetica, Arial, sans-serif" x="94"
                                                            y="109.348" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px"
                                                            font-weight="400" fill="#a1acb8"
                                                            class="apexcharts-text apexcharts-xaxis-label"
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1740">A5</tspan>
                                                            <title>A5</title>
                                                        </text><text id="SvgjsText1742"
                                                            font-family="Helvetica, Arial, sans-serif" x="117.5"
                                                            y="109.348" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px"
                                                            font-weight="400" fill="#a1acb8"
                                                            class="apexcharts-text apexcharts-xaxis-label"
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1743">A6</tspan>
                                                            <title>A6</title>
                                                        </text><text id="SvgjsText1745"
                                                            font-family="Helvetica, Arial, sans-serif" x="141"
                                                            y="109.348" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px"
                                                            font-weight="400" fill="#a1acb8"
                                                            class="apexcharts-text apexcharts-xaxis-label"
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1746">A7</tspan>
                                                            <title>A7</title>
                                                        </text><text id="SvgjsText1748"
                                                            font-family="Helvetica, Arial, sans-serif" x="164.5"
                                                            y="109.348" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px"
                                                            font-weight="400" fill="#a1acb8"
                                                            class="apexcharts-text apexcharts-xaxis-label"
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1749">A8</tspan>
                                                            <title>A8</title>
                                                        </text><text id="SvgjsText1751"
                                                            font-family="Helvetica, Arial, sans-serif" x="188"
                                                            y="109.348" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px"
                                                            font-weight="400" fill="#a1acb8"
                                                            class="apexcharts-text apexcharts-xaxis-label"
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1752">A9</tspan>
                                                            <title>A9</title>
                                                        </text></g>
                                                </g>
                                                <g id="SvgjsG1755" class="apexcharts-grid">
                                                    <g id="SvgjsG1756" class="apexcharts-gridlines-horizontal"
                                                        style="display: none;">
                                                        <line id="SvgjsLine1758" x1="0" y1="0"
                                                            x2="188" y2="0" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1759" x1="0" y1="16.0696"
                                                            x2="188" y2="16.0696" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1760" x1="0" y1="32.1392"
                                                            x2="188" y2="32.1392" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1761" x1="0"
                                                            y1="48.208800000000004" x2="188"
                                                            y2="48.208800000000004" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1762" x1="0" y1="64.2784"
                                                            x2="188" y2="64.2784" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1763" x1="0"
                                                            y1="80.34800000000001" x2="188"
                                                            y2="80.34800000000001" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1757" class="apexcharts-gridlines-vertical"
                                                        style="display: none;"></g>
                                                    <line id="SvgjsLine1765" x1="0" y1="80.348"
                                                        x2="188" y2="80.348" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    <line id="SvgjsLine1764" x1="0" y1="1"
                                                        x2="0" y2="80.348" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                </g>
                                                <g id="SvgjsG1714"
                                                    class="apexcharts-area-series apexcharts-plot-series">
                                                    <g id="SvgjsG1715" class="apexcharts-series"
                                                        seriesName="seriesx1" data:longestSeries="true"
                                                        rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath1722"
                                                            d="M 0 80.348L 0 66.2871C 8.225 66.2871 15.275 56.243599999999994 23.5 56.243599999999994C 31.725 56.243599999999994 38.775 68.2958 47 68.2958C 55.225 68.2958 62.275 52.2262 70.5 52.2262C 78.725 52.2262 85.775 62.26969999999999 94 62.26969999999999C 102.225 62.26969999999999 109.275 16.069599999999994 117.5 16.069599999999994C 125.725 16.069599999999994 132.775 72.3132 141 72.3132C 149.225 72.3132 156.275 26.113100000000003 164.5 26.113100000000003C 172.725 26.113100000000003 179.775 46.2001 188 46.2001C 188 46.2001 188 46.2001 188 80.348M 188 46.2001z"
                                                            fill="url(#SvgjsLinearGradient1718)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-area"
                                                            index="0" clip-path="url(#gridRectMaskv4kwkxw3)"
                                                            pathTo="M 0 80.348L 0 66.2871C 8.225 66.2871 15.275 56.243599999999994 23.5 56.243599999999994C 31.725 56.243599999999994 38.775 68.2958 47 68.2958C 55.225 68.2958 62.275 52.2262 70.5 52.2262C 78.725 52.2262 85.775 62.26969999999999 94 62.26969999999999C 102.225 62.26969999999999 109.275 16.069599999999994 117.5 16.069599999999994C 125.725 16.069599999999994 132.775 72.3132 141 72.3132C 149.225 72.3132 156.275 26.113100000000003 164.5 26.113100000000003C 172.725 26.113100000000003 179.775 46.2001 188 46.2001C 188 46.2001 188 46.2001 188 80.348M 188 46.2001z"
                                                            pathFrom="M -1 96.4176L -1 96.4176L 23.5 96.4176L 47 96.4176L 70.5 96.4176L 94 96.4176L 117.5 96.4176L 141 96.4176L 164.5 96.4176L 188 96.4176">
                                                        </path>
                                                        <path id="SvgjsPath1723"
                                                            d="M 0 66.2871C 8.225 66.2871 15.275 56.243599999999994 23.5 56.243599999999994C 31.725 56.243599999999994 38.775 68.2958 47 68.2958C 55.225 68.2958 62.275 52.2262 70.5 52.2262C 78.725 52.2262 85.775 62.26969999999999 94 62.26969999999999C 102.225 62.26969999999999 109.275 16.069599999999994 117.5 16.069599999999994C 125.725 16.069599999999994 132.775 72.3132 141 72.3132C 149.225 72.3132 156.275 26.113100000000003 164.5 26.113100000000003C 172.725 26.113100000000003 179.775 46.2001 188 46.2001"
                                                            fill="none" fill-opacity="1" stroke="#71dd37"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                            stroke-dasharray="0" class="apexcharts-area"
                                                            index="0" clip-path="url(#gridRectMaskv4kwkxw3)"
                                                            pathTo="M 0 66.2871C 8.225 66.2871 15.275 56.243599999999994 23.5 56.243599999999994C 31.725 56.243599999999994 38.775 68.2958 47 68.2958C 55.225 68.2958 62.275 52.2262 70.5 52.2262C 78.725 52.2262 85.775 62.26969999999999 94 62.26969999999999C 102.225 62.26969999999999 109.275 16.069599999999994 117.5 16.069599999999994C 125.725 16.069599999999994 132.775 72.3132 141 72.3132C 149.225 72.3132 156.275 26.113100000000003 164.5 26.113100000000003C 172.725 26.113100000000003 179.775 46.2001 188 46.2001"
                                                            pathFrom="M -1 96.4176L -1 96.4176L 23.5 96.4176L 47 96.4176L 70.5 96.4176L 94 96.4176L 117.5 96.4176L 141 96.4176L 164.5 96.4176L 188 96.4176">
                                                        </path>
                                                        <g id="SvgjsG1716" class="apexcharts-series-markers-wrap"
                                                            data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle1771" r="0"
                                                                    cx="0" cy="0"
                                                                    class="apexcharts-marker wpt9oehmzh no-pointer-events"
                                                                    stroke="#ffffff" fill="#71dd37" fill-opacity="1"
                                                                    stroke-width="2" stroke-opacity="0.9"
                                                                    default-marker-size="0"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1717" class="apexcharts-datalabels"
                                                        data:realIndex="0"></g>
                                                </g>
                                                <line id="SvgjsLine1766" x1="0" y1="0"
                                                    x2="188" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1767" x1="0" y1="0"
                                                    x2="188" y2="0" stroke-dasharray="0"
                                                    stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG1768" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG1769" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG1770" class="apexcharts-point-annotations"></g>
                                                <rect id="SvgjsRect1772" width="0" height="0"
                                                    x="0" y="0" rx="0" ry="0"
                                                    opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect">
                                                </rect>
                                                <rect id="SvgjsRect1773" width="0" height="0"
                                                    x="0" y="0" rx="0" ry="0"
                                                    opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fefefe"
                                                    class="apexcharts-selection-rect"></rect>
                                            </g>
                                            <rect id="SvgjsRect1710" width="0" height="0" x="0"
                                                y="0" rx="0" ry="0" opacity="1"
                                                stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe">
                                            </rect>
                                            <g id="SvgjsG1753" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-8, 0)">
                                                <g id="SvgjsG1754" class="apexcharts-yaxis-texts-g"></g>
                                            </g>
                                            <g id="SvgjsG1708" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend" style="max-height: 60px;"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-title"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            </div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(113, 221, 55);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                            <div class="apexcharts-xaxistooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 414px; height: 121px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ New Visitors & Activity -->
            <div class="col-md-12 col-lg-12 mb-md-3 mb-4">
                <div class="card">
                    <div class="table-responsive text-nowrap">
                        <table class="text-nowrap table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Amount</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Added By</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach ($finances as $finance)
                                    <tr>
                                        <td>
                                            00{{ $finance->id }}
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">

                                                <div class="d-flex flex-column">
                                                    <span class="fw-medium lh-1">GHc {{ $finance->amount }}</span>

                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            {{ $finance->description }}
                                        </td>
                                        <td>
                                            @if ($finance->income_or_expense == 'income')
                                                <span class="badge bg-label-success">Income</span>
                                            @else
                                                <span class="badge bg-label-danger">Expense</span>
                                            @endif


                                        </td>
                                        <td>
                                            <div class="text-muted lh-1"><span
                                                    class="text-primary fw-medium">{{ $finance->user->first_name }}
                                            </div>
                                            <small class="text-muted">{{ $finance->user->user_type }}</small>
                                        </td>

                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn dropdown-toggle hide-arrow p-0"
                                                    data-bs-toggle="dropdown"><i
                                                        class="bx bx-dots-vertical-rounded"></i></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="bx bx-edit-alt me-1"></i> View Details</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="bx bx-trash me-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-4">
                <div class="row">
                    <div class="col-lg-6 col-md-3 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="../../assets/img/icons/unicons/wallet-info.png" alt="Credit Card"
                                            class="rounded">
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn p-0" type="button" id="cardOpt6"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="cardOpt6">
                                            <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <span class="d-block">Sales</span>
                                <h4 class="card-title mb-1">$4,679</h4>
                                <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i>
                                    +28.42%</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-3 col-6 mb-4">
                        <div class="card">
                            <div class="card-body pb-2" style="position: relative;">
                                <span class="d-block fw-medium">Profit</span>
                                <h3 class="card-title mb-0">624k</h3>
                                <div id="profitChart" style="min-height: 95px;">
                                    <div id="apexchartslca1k3cj"
                                        class="apexcharts-canvas apexchartslca1k3cj apexcharts-theme-light"
                                        style="width: 170px; height: 80px;"><svg id="SvgjsSvg1774" width="170"
                                            height="80" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                            xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                            style="background: transparent;">
                                            <g id="SvgjsG1776" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(0, 0)">
                                                <defs id="SvgjsDefs1775">
                                                    <linearGradient id="SvgjsLinearGradient1779" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1780" stop-opacity="0.4"
                                                            stop-color="rgba(216,227,240,0.4)" offset="0">
                                                        </stop>
                                                        <stop id="SvgjsStop1781" stop-opacity="0.5"
                                                            stop-color="rgba(190,209,230,0.5)" offset="1">
                                                        </stop>
                                                        <stop id="SvgjsStop1782" stop-opacity="0.5"
                                                            stop-color="rgba(190,209,230,0.5)" offset="1">
                                                        </stop>
                                                    </linearGradient>
                                                    <clipPath id="gridRectMasklca1k3cj">
                                                        <rect id="SvgjsRect1784" width="179" height="59.348"
                                                            x="-4.5" y="-2.5" rx="0"
                                                            ry="0" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0" fill="#fff">
                                                        </rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMasklca1k3cj"></clipPath>
                                                    <clipPath id="nonForecastMasklca1k3cj"></clipPath>
                                                    <clipPath id="gridRectMarkerMasklca1k3cj">
                                                        <rect id="SvgjsRect1785" width="174" height="58.348"
                                                            x="-2" y="-2" rx="0"
                                                            ry="0" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0" fill="#fff">
                                                        </rect>
                                                    </clipPath>
                                                </defs>
                                                <rect id="SvgjsRect1783" width="13.8125" height="54.348"
                                                    x="0" y="0" rx="0" ry="0"
                                                    opacity="1" stroke-width="0" stroke-dasharray="3"
                                                    fill="url(#SvgjsLinearGradient1779)"
                                                    class="apexcharts-xcrosshairs" y2="54.348" filter="none"
                                                    fill-opacity="0.9"></rect>
                                                <g id="SvgjsG1809" class="apexcharts-xaxis"
                                                    transform="translate(0, 0)">
                                                    <g id="SvgjsG1810" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)"><text id="SvgjsText1812"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="21.25" y="83.348" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px"
                                                            font-weight="400" fill="#a1acb8"
                                                            class="apexcharts-text apexcharts-xaxis-label"
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1813">Jan</tspan>
                                                            <title>Jan</title>
                                                        </text><text id="SvgjsText1815"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="63.75" y="83.348" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px"
                                                            font-weight="400" fill="#a1acb8"
                                                            class="apexcharts-text apexcharts-xaxis-label"
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1816">Apr</tspan>
                                                            <title>Apr</title>
                                                        </text><text id="SvgjsText1818"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="106.25" y="83.348" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px"
                                                            font-weight="400" fill="#a1acb8"
                                                            class="apexcharts-text apexcharts-xaxis-label"
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1819">Jul</tspan>
                                                            <title>Jul</title>
                                                        </text><text id="SvgjsText1821"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="148.75" y="83.348" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px"
                                                            font-weight="400" fill="#a1acb8"
                                                            class="apexcharts-text apexcharts-xaxis-label"
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1822">Oct</tspan>
                                                            <title>Oct</title>
                                                        </text></g>
                                                </g>
                                                <g id="SvgjsG1825" class="apexcharts-grid">
                                                    <g id="SvgjsG1826" class="apexcharts-gridlines-horizontal"
                                                        style="display: none;">
                                                        <line id="SvgjsLine1828" x1="0" y1="0"
                                                            x2="170" y2="0" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1829" x1="0" y1="13.587"
                                                            x2="170" y2="13.587" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1830" x1="0" y1="27.174"
                                                            x2="170" y2="27.174" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1831" x1="0"
                                                            y1="40.760999999999996" x2="170"
                                                            y2="40.760999999999996" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1832" x1="0" y1="54.348"
                                                            x2="170" y2="54.348" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1827" class="apexcharts-gridlines-vertical"
                                                        style="display: none;"></g>
                                                    <line id="SvgjsLine1834" x1="0" y1="54.348"
                                                        x2="170" y2="54.348" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    <line id="SvgjsLine1833" x1="0" y1="1"
                                                        x2="0" y2="54.348" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                </g>
                                                <g id="SvgjsG1786"
                                                    class="apexcharts-bar-series apexcharts-plot-series">
                                                    <g id="SvgjsG1787" class="apexcharts-series" rel="1"
                                                        seriesName="seriesx1" data:realIndex="0">
                                                        <path id="SvgjsPath1791"
                                                            d="M 7.4375 51.348L 7.4375 17.945699999999995Q 7.4375 14.945699999999995 10.4375 14.945699999999995L 13.25 14.945699999999995Q 16.25 14.945699999999995 16.25 17.945699999999995L 16.25 17.945699999999995L 16.25 51.348Q 16.25 54.348 13.25 54.348L 10.4375 54.348Q 7.4375 54.348 7.4375 51.348z"
                                                            fill="rgba(113,221,55,0.85)" fill-opacity="1"
                                                            stroke="#" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="5"
                                                            stroke-dasharray="0" class="apexcharts-bar-area"
                                                            index="0" clip-path="url(#gridRectMasklca1k3cj)"
                                                            pathTo="M 7.4375 51.348L 7.4375 17.945699999999995Q 7.4375 14.945699999999995 10.4375 14.945699999999995L 13.25 14.945699999999995Q 16.25 14.945699999999995 16.25 17.945699999999995L 16.25 17.945699999999995L 16.25 51.348Q 16.25 54.348 13.25 54.348L 10.4375 54.348Q 7.4375 54.348 7.4375 51.348z"
                                                            pathFrom="M 7.4375 51.348L 7.4375 51.348L 16.25 51.348L 16.25 51.348L 16.25 51.348L 16.25 51.348L 16.25 51.348L 7.4375 51.348"
                                                            cy="14.945699999999995" cx="47.4375" j="0"
                                                            val="58" barHeight="39.402300000000004"
                                                            barWidth="13.8125"></path>
                                                        <path id="SvgjsPath1793"
                                                            d="M 49.9375 51.348L 49.9375 38.3262Q 49.9375 35.3262 52.9375 35.3262L 55.75 35.3262Q 58.75 35.3262 58.75 38.3262L 58.75 38.3262L 58.75 51.348Q 58.75 54.348 55.75 54.348L 52.9375 54.348Q 49.9375 54.348 49.9375 51.348z"
                                                            fill="rgba(113,221,55,0.85)" fill-opacity="1"
                                                            stroke="#" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="5"
                                                            stroke-dasharray="0" class="apexcharts-bar-area"
                                                            index="0" clip-path="url(#gridRectMasklca1k3cj)"
                                                            pathTo="M 49.9375 51.348L 49.9375 38.3262Q 49.9375 35.3262 52.9375 35.3262L 55.75 35.3262Q 58.75 35.3262 58.75 38.3262L 58.75 38.3262L 58.75 51.348Q 58.75 54.348 55.75 54.348L 52.9375 54.348Q 49.9375 54.348 49.9375 51.348z"
                                                            pathFrom="M 49.9375 51.348L 49.9375 51.348L 58.75 51.348L 58.75 51.348L 58.75 51.348L 58.75 51.348L 58.75 51.348L 49.9375 51.348"
                                                            cy="35.3262" cx="89.9375" j="1"
                                                            val="28" barHeight="19.0218" barWidth="13.8125">
                                                        </path>
                                                        <path id="SvgjsPath1795"
                                                            d="M 92.4375 51.348L 92.4375 23.380499999999998Q 92.4375 20.380499999999998 95.4375 20.380499999999998L 98.25 20.380499999999998Q 101.25 20.380499999999998 101.25 23.380499999999998L 101.25 23.380499999999998L 101.25 51.348Q 101.25 54.348 98.25 54.348L 95.4375 54.348Q 92.4375 54.348 92.4375 51.348z"
                                                            fill="rgba(113,221,55,0.85)" fill-opacity="1"
                                                            stroke="#" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="5"
                                                            stroke-dasharray="0" class="apexcharts-bar-area"
                                                            index="0" clip-path="url(#gridRectMasklca1k3cj)"
                                                            pathTo="M 92.4375 51.348L 92.4375 23.380499999999998Q 92.4375 20.380499999999998 95.4375 20.380499999999998L 98.25 20.380499999999998Q 101.25 20.380499999999998 101.25 23.380499999999998L 101.25 23.380499999999998L 101.25 51.348Q 101.25 54.348 98.25 54.348L 95.4375 54.348Q 92.4375 54.348 92.4375 51.348z"
                                                            pathFrom="M 92.4375 51.348L 92.4375 51.348L 101.25 51.348L 101.25 51.348L 101.25 51.348L 101.25 51.348L 101.25 51.348L 92.4375 51.348"
                                                            cy="20.380499999999998" cx="132.4375" j="2"
                                                            val="50" barHeight="33.9675" barWidth="13.8125">
                                                        </path>
                                                        <path id="SvgjsPath1797"
                                                            d="M 134.9375 51.348L 134.9375 3Q 134.9375 0 137.9375 0L 140.75 0Q 143.75 0 143.75 3L 143.75 3L 143.75 51.348Q 143.75 54.348 140.75 54.348L 137.9375 54.348Q 134.9375 54.348 134.9375 51.348z"
                                                            fill="rgba(113,221,55,0.85)" fill-opacity="1"
                                                            stroke="#" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="5"
                                                            stroke-dasharray="0" class="apexcharts-bar-area"
                                                            index="0" clip-path="url(#gridRectMasklca1k3cj)"
                                                            pathTo="M 134.9375 51.348L 134.9375 3Q 134.9375 0 137.9375 0L 140.75 0Q 143.75 0 143.75 3L 143.75 3L 143.75 51.348Q 143.75 54.348 140.75 54.348L 137.9375 54.348Q 134.9375 54.348 134.9375 51.348z"
                                                            pathFrom="M 134.9375 51.348L 134.9375 51.348L 143.75 51.348L 143.75 51.348L 143.75 51.348L 143.75 51.348L 143.75 51.348L 134.9375 51.348"
                                                            cy="0" cx="174.9375" j="3"
                                                            val="80" barHeight="54.348" barWidth="13.8125">
                                                        </path>
                                                        <g id="SvgjsG1789" class="apexcharts-bar-goals-markers"
                                                            style="pointer-events: none">
                                                            <g id="SvgjsG1790"
                                                                className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG1792"
                                                                className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG1794"
                                                                className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG1796"
                                                                className="apexcharts-bar-goals-groups"></g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1798" class="apexcharts-series" rel="2"
                                                        seriesName="seriesx2" data:realIndex="1">
                                                        <path id="SvgjsPath1802"
                                                            d="M 21.25 51.348L 21.25 23.380499999999998Q 21.25 20.380499999999998 24.25 20.380499999999998L 27.0625 20.380499999999998Q 30.0625 20.380499999999998 30.0625 23.380499999999998L 30.0625 23.380499999999998L 30.0625 51.348Q 30.0625 54.348 27.0625 54.348L 24.25 54.348Q 21.25 54.348 21.25 51.348z"
                                                            fill="#28d0941a" fill-opacity="1" stroke="a"
                                                            stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="5" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="1"
                                                            clip-path="url(#gridRectMasklca1k3cj)"
                                                            pathTo="M 21.25 51.348L 21.25 23.380499999999998Q 21.25 20.380499999999998 24.25 20.380499999999998L 27.0625 20.380499999999998Q 30.0625 20.380499999999998 30.0625 23.380499999999998L 30.0625 23.380499999999998L 30.0625 51.348Q 30.0625 54.348 27.0625 54.348L 24.25 54.348Q 21.25 54.348 21.25 51.348z"
                                                            pathFrom="M 21.25 51.348L 21.25 51.348L 30.0625 51.348L 30.0625 51.348L 30.0625 51.348L 30.0625 51.348L 30.0625 51.348L 21.25 51.348"
                                                            cy="17.380499999999998" cx="61.25" j="0"
                                                            val="50" barHeight="33.9675" barWidth="13.8125">
                                                        </path>
                                                        <path id="SvgjsPath1804"
                                                            d="M 63.75 51.348L 63.75 42.4023Q 63.75 39.4023 66.75 39.4023L 69.5625 39.4023Q 72.5625 39.4023 72.5625 42.4023L 72.5625 42.4023L 72.5625 51.348Q 72.5625 54.348 69.5625 54.348L 66.75 54.348Q 63.75 54.348 63.75 51.348z"
                                                            fill="#28d0941a" fill-opacity="1" stroke="a"
                                                            stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="5" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="1"
                                                            clip-path="url(#gridRectMasklca1k3cj)"
                                                            pathTo="M 63.75 51.348L 63.75 42.4023Q 63.75 39.4023 66.75 39.4023L 69.5625 39.4023Q 72.5625 39.4023 72.5625 42.4023L 72.5625 42.4023L 72.5625 51.348Q 72.5625 54.348 69.5625 54.348L 66.75 54.348Q 63.75 54.348 63.75 51.348z"
                                                            pathFrom="M 63.75 51.348L 63.75 51.348L 72.5625 51.348L 72.5625 51.348L 72.5625 51.348L 72.5625 51.348L 72.5625 51.348L 63.75 51.348"
                                                            cy="36.4023" cx="103.75" j="1"
                                                            val="22" barHeight="14.9457" barWidth="13.8125">
                                                        </path>
                                                        <path id="SvgjsPath1806"
                                                            d="M 106.25 51.348L 106.25 13.190249999999999Q 106.25 10.190249999999999 109.25 10.190249999999999L 112.0625 10.190249999999999Q 115.0625 10.190249999999999 115.0625 13.190249999999999L 115.0625 13.190249999999999L 115.0625 51.348Q 115.0625 54.348 112.0625 54.348L 109.25 54.348Q 106.25 54.348 106.25 51.348z"
                                                            fill="#28d0941a" fill-opacity="1" stroke="a"
                                                            stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="5" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="1"
                                                            clip-path="url(#gridRectMasklca1k3cj)"
                                                            pathTo="M 106.25 51.348L 106.25 13.190249999999999Q 106.25 10.190249999999999 109.25 10.190249999999999L 112.0625 10.190249999999999Q 115.0625 10.190249999999999 115.0625 13.190249999999999L 115.0625 13.190249999999999L 115.0625 51.348Q 115.0625 54.348 112.0625 54.348L 109.25 54.348Q 106.25 54.348 106.25 51.348z"
                                                            pathFrom="M 106.25 51.348L 106.25 51.348L 115.0625 51.348L 115.0625 51.348L 115.0625 51.348L 115.0625 51.348L 115.0625 51.348L 106.25 51.348"
                                                            cy="7.190249999999999" cx="146.25" j="2"
                                                            val="65" barHeight="44.15775"
                                                            barWidth="13.8125"></path>
                                                        <path id="SvgjsPath1808"
                                                            d="M 148.75 51.348L 148.75 8.434799999999996Q 148.75 5.434799999999996 151.75 5.434799999999996L 154.5625 5.434799999999996Q 157.5625 5.434799999999996 157.5625 8.434799999999996L 157.5625 8.434799999999996L 157.5625 51.348Q 157.5625 54.348 154.5625 54.348L 151.75 54.348Q 148.75 54.348 148.75 51.348z"
                                                            fill="#28d0941a" fill-opacity="1" stroke="a"
                                                            stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="5" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="1"
                                                            clip-path="url(#gridRectMasklca1k3cj)"
                                                            pathTo="M 148.75 51.348L 148.75 8.434799999999996Q 148.75 5.434799999999996 151.75 5.434799999999996L 154.5625 5.434799999999996Q 157.5625 5.434799999999996 157.5625 8.434799999999996L 157.5625 8.434799999999996L 157.5625 51.348Q 157.5625 54.348 154.5625 54.348L 151.75 54.348Q 148.75 54.348 148.75 51.348z"
                                                            pathFrom="M 148.75 51.348L 148.75 51.348L 157.5625 51.348L 157.5625 51.348L 157.5625 51.348L 157.5625 51.348L 157.5625 51.348L 148.75 51.348"
                                                            cy="2.4347999999999956" cx="188.75" j="3"
                                                            val="72" barHeight="48.9132" barWidth="13.8125">
                                                        </path>
                                                        <g id="SvgjsG1800" class="apexcharts-bar-goals-markers"
                                                            style="pointer-events: none">
                                                            <g id="SvgjsG1801"
                                                                className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG1803"
                                                                className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG1805"
                                                                className="apexcharts-bar-goals-groups"></g>
                                                            <g id="SvgjsG1807"
                                                                className="apexcharts-bar-goals-groups"></g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1788" class="apexcharts-datalabels"
                                                        data:realIndex="0"></g>
                                                    <g id="SvgjsG1799" class="apexcharts-datalabels"
                                                        data:realIndex="1"></g>
                                                </g>
                                                <line id="SvgjsLine1835" x1="0" y1="0"
                                                    x2="170" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1836" x1="0" y1="0"
                                                    x2="170" y2="0" stroke-dasharray="0"
                                                    stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG1837" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG1838" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG1839" class="apexcharts-point-annotations"></g>
                                            </g>
                                            <g id="SvgjsG1823" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-8, 0)">
                                                <g id="SvgjsG1824" class="apexcharts-yaxis-texts-g"></g>
                                            </g>
                                            <g id="SvgjsG1777" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend" style="max-height: 40px;"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-title"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            </div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(113, 221, 55);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgba(40, 208, 148, 0.1);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                        <div class="apexcharts-toolbar" style="top: 0px; right: 3px;">
                                            <div class="apexcharts-menu">
                                                <div class="apexcharts-menu-item exportSVG" title="Download SVG">
                                                    Download SVG</div>
                                                <div class="apexcharts-menu-item exportPNG" title="Download PNG">
                                                    Download PNG</div>
                                                <div class="apexcharts-menu-item exportCSV" title="Download CSV">
                                                    Download CSV</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 219px; height: 176px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-3 col-6 mb-4">
                        <div class="card">
                            <div class="card-body pb-0">
                                <span class="d-block fw-medium">Expenses</span>
                            </div>
                            <div id="expensesChart" class="mb-2" style="min-height: 61px;">
                                <div id="apexchartsi12xprsfg"
                                    class="apexcharts-canvas apexchartsi12xprsfg apexcharts-theme-light"
                                    style="width: 218px; height: 61px;"><svg id="SvgjsSvg1840" width="218"
                                        height="61" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS"
                                        transform="translate(0, 0)" style="background: transparent;">
                                        <g id="SvgjsG1842" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(34, -10)">
                                            <defs id="SvgjsDefs1841">
                                                <clipPath id="gridRectMaski12xprsfg">
                                                    <rect id="SvgjsRect1844" width="156" height="142"
                                                        x="-3" y="-1" rx="0"
                                                        ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMaski12xprsfg"></clipPath>
                                                <clipPath id="nonForecastMaski12xprsfg"></clipPath>
                                                <clipPath id="gridRectMarkerMaski12xprsfg">
                                                    <rect id="SvgjsRect1845" width="154" height="144"
                                                        x="-2" y="-2" rx="0"
                                                        ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                            </defs>
                                            <g id="SvgjsG1846" class="apexcharts-radialbar">
                                                <g id="SvgjsG1847">
                                                    <g id="SvgjsG1848" class="apexcharts-tracks">
                                                        <g id="SvgjsG1849"
                                                            class="apexcharts-radialbar-track apexcharts-track"
                                                            rel="1">
                                                            <path id="apexcharts-radialbarTrack-0"
                                                                d="M 27.25609756097561 70 A 47.74390243902439 47.74390243902439 0 0 1 122.7439024390244 70"
                                                                fill="none" fill-opacity="1" stroke="#8897aa1a"
                                                                stroke-opacity="1" stroke-linecap="round"
                                                                stroke-width="10.05487804878049"
                                                                stroke-dasharray="0"
                                                                class="apexcharts-radialbar-area"
                                                                data:pathOrig="M 27.25609756097561 70 A 47.74390243902439 47.74390243902439 0 0 1 122.7439024390244 70">
                                                            </path>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1851">
                                                        <g id="SvgjsG1855"
                                                            class="apexcharts-series apexcharts-radial-series"
                                                            seriesName="Progress" rel="1"
                                                            data:realIndex="0">
                                                            <path id="SvgjsPath1856"
                                                                d="M 27.25609756097561 70 A 47.74390243902439 47.74390243902439 0 0 1 111.57395115622926 39.31081107411218"
                                                                fill="none" fill-opacity="0.85"
                                                                stroke="rgba(105,108,255,0.85)" stroke-opacity="1"
                                                                stroke-linecap="round"
                                                                stroke-width="10.365853658536587"
                                                                stroke-dasharray="0"
                                                                class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                data:angle="140" data:value="78" index="0"
                                                                j="0"
                                                                data:pathOrig="M 27.25609756097561 70 A 47.74390243902439 47.74390243902439 0 0 1 111.57395115622926 39.31081107411218">
                                                            </path>
                                                        </g>
                                                        <circle id="SvgjsCircle1852" r="37.71646341463414"
                                                            cx="75" cy="70"
                                                            class="apexcharts-radialbar-hollow" fill="transparent">
                                                        </circle>
                                                        <g id="SvgjsG1853" class="apexcharts-datalabels-group"
                                                            transform="translate(0, 0) scale(1)"
                                                            style="opacity: 1;"><text id="SvgjsText1854"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="75" y="70" text-anchor="middle"
                                                                dominant-baseline="auto" font-size="22px"
                                                                font-weight="500" fill="#566a7f"
                                                                class="apexcharts-text apexcharts-datalabel-value"
                                                                style="font-family: Helvetica, Arial, sans-serif;">78%</text>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                            <line id="SvgjsLine1857" x1="0" y1="0"
                                                x2="150" y2="0" stroke="#b6b6b6"
                                                stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine1858" x1="0" y1="0"
                                                x2="150" y2="0" stroke-dasharray="0"
                                                stroke-width="0" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs-hidden"></line>
                                        </g>
                                        <g id="SvgjsG1843" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend"></div>
                                </div>
                            </div>
                            <div class="p-3 pt-2">
                                <small class="text-muted d-block text-center">$21k Expenses more than last
                                    month</small>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 219px; height: 180px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-3 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="../../assets/img/icons/unicons/briefcase.png" alt="Credit Card"
                                            class="rounded">
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn p-0" type="button" id="cardOpt1"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt1">
                                            <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <span class="d-block">Transactions</span>
                                <h4 class="card-title mb-1">$14,857</h4>
                                <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i>
                                    +28.14%</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Total Income -->
            <div class="col-md-12 col-lg-8 mb-4">
                <div class="card">
                    <div class="row row-bordered g-0">
                        <div class="col-md-8">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Total Income</h5>
                                <small class="card-subtitle">Yearly report overview</small>
                            </div>
                            <div class="card-body" style="position: relative;">
                                <div id="totalIncomeChart" style="min-height: 265px;">
                                    <div id="apexchartsqbq4xq0qg"
                                        class="apexcharts-canvas apexchartsqbq4xq0qg apexcharts-theme-light"
                                        style="width: 413px; height: 250px;"><svg id="SvgjsSvg1860" width="413"
                                            height="250" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                            transform="translate(0, 0)" style="background: transparent;">
                                            <g id="SvgjsG1862" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(40, 15)">
                                                <defs id="SvgjsDefs1861">
                                                    <clipPath id="gridRectMaskqbq4xq0qg">
                                                        <rect id="SvgjsRect1868" width="366.4416666030884"
                                                            height="210.348" x="-3.5" y="-1.5"
                                                            rx="0" ry="0" opacity="1"
                                                            stroke-width="0" stroke="none" stroke-dasharray="0"
                                                            fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskqbq4xq0qg"></clipPath>
                                                    <clipPath id="nonForecastMaskqbq4xq0qg"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskqbq4xq0qg">
                                                        <rect id="SvgjsRect1869" width="363.4416666030884"
                                                            height="211.348" x="-2" y="-2"
                                                            rx="0" ry="0" opacity="1"
                                                            stroke-width="0" stroke="none" stroke-dasharray="0"
                                                            fill="#fff"></rect>
                                                    </clipPath>
                                                    <linearGradient id="SvgjsLinearGradient1874" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1875" stop-opacity="0.7"
                                                            stop-color="rgba(105,108,255,0.7)" offset="0">
                                                        </stop>
                                                        <stop id="SvgjsStop1876" stop-opacity="0.25"
                                                            stop-color="rgba(225,226,255,0.25)" offset="0.95">
                                                        </stop>
                                                        <stop id="SvgjsStop1877" stop-opacity="0.25"
                                                            stop-color="rgba(225,226,255,0.25)" offset="1">
                                                        </stop>
                                                    </linearGradient>
                                                    <filter id="SvgjsFilter1879" filterUnits="userSpaceOnUse"
                                                        width="200%" height="200%" x="-50%"
                                                        y="-50%">
                                                        <feFlood id="SvgjsFeFlood1880" flood-color="#696cff"
                                                            flood-opacity="0.15" result="SvgjsFeFlood1880Out"
                                                            in="SourceGraphic"></feFlood>
                                                        <feComposite id="SvgjsFeComposite1881"
                                                            in="SvgjsFeFlood1880Out" in2="SourceAlpha"
                                                            operator="in" result="SvgjsFeComposite1881Out">
                                                        </feComposite>
                                                        <feOffset id="SvgjsFeOffset1882" dx="2"
                                                            dy="14" result="SvgjsFeOffset1882Out"
                                                            in="SvgjsFeComposite1881Out"></feOffset>
                                                        <feGaussianBlur id="SvgjsFeGaussianBlur1883"
                                                            stdDeviation="3 " result="SvgjsFeGaussianBlur1883Out"
                                                            in="SvgjsFeOffset1882Out"></feGaussianBlur>
                                                        <feBlend id="SvgjsFeBlend1884" in="SourceGraphic"
                                                            in2="SvgjsFeGaussianBlur1883Out" mode="normal"
                                                            result="SvgjsFeBlend1884Out"></feBlend>
                                                    </filter>
                                                    <filter id="SvgjsFilter1886" filterUnits="userSpaceOnUse"
                                                        width="200%" height="200%" x="-50%"
                                                        y="-50%">
                                                        <feFlood id="SvgjsFeFlood1887" flood-color="#696cff"
                                                            flood-opacity="0.15" result="SvgjsFeFlood1887Out"
                                                            in="SourceGraphic"></feFlood>
                                                        <feComposite id="SvgjsFeComposite1888"
                                                            in="SvgjsFeFlood1887Out" in2="SourceAlpha"
                                                            operator="in" result="SvgjsFeComposite1888Out">
                                                        </feComposite>
                                                        <feOffset id="SvgjsFeOffset1889" dx="2"
                                                            dy="14" result="SvgjsFeOffset1889Out"
                                                            in="SvgjsFeComposite1888Out"></feOffset>
                                                        <feGaussianBlur id="SvgjsFeGaussianBlur1890"
                                                            stdDeviation="3 " result="SvgjsFeGaussianBlur1890Out"
                                                            in="SvgjsFeOffset1889Out"></feGaussianBlur>
                                                        <feBlend id="SvgjsFeBlend1891" in="SourceGraphic"
                                                            in2="SvgjsFeGaussianBlur1890Out" mode="normal"
                                                            result="SvgjsFeBlend1891Out"></feBlend>
                                                    </filter>
                                                </defs>
                                                <line id="SvgjsLine1867" x1="0" y1="0"
                                                    x2="0" y2="207.348" stroke="#b6b6b6"
                                                    stroke-dasharray="3" stroke-linecap="butt"
                                                    class="apexcharts-xcrosshairs" x="0" y="0"
                                                    width="1" height="207.348" fill="#b1b9c4"
                                                    filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                                <g id="SvgjsG1892" class="apexcharts-xaxis"
                                                    transform="translate(0, 0)">
                                                    <g id="SvgjsG1893" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)"><text id="SvgjsText1895"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="0" y="236.348" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="13px"
                                                            font-weight="400" fill="#a1acb8"
                                                            class="apexcharts-text apexcharts-xaxis-label"
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1896">Jan</tspan>
                                                            <title>Jan</title>
                                                        </text><text id="SvgjsText1898"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="32.67651514573531" y="236.348"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="13px" font-weight="400" fill="#a1acb8"
                                                            class="apexcharts-text apexcharts-xaxis-label"
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1899">Feb</tspan>
                                                            <title>Feb</title>
                                                        </text><text id="SvgjsText1901"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="65.35303029147062" y="236.348"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="13px" font-weight="400" fill="#a1acb8"
                                                            class="apexcharts-text apexcharts-xaxis-label"
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1902">Mar</tspan>
                                                            <title>Mar</title>
                                                        </text><text id="SvgjsText1904"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="98.02954543720594" y="236.348"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="13px" font-weight="400" fill="#a1acb8"
                                                            class="apexcharts-text apexcharts-xaxis-label"
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1905">Apr</tspan>
                                                            <title>Apr</title>
                                                        </text><text id="SvgjsText1907"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="130.70606058294123" y="236.348"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="13px" font-weight="400" fill="#a1acb8"
                                                            class="apexcharts-text apexcharts-xaxis-label"
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1908">May</tspan>
                                                            <title>May</title>
                                                        </text><text id="SvgjsText1910"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="163.38257572867653" y="236.348"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="13px" font-weight="400" fill="#a1acb8"
                                                            class="apexcharts-text apexcharts-xaxis-label"
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1911">Jun</tspan>
                                                            <title>Jun</title>
                                                        </text><text id="SvgjsText1913"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="196.05909087441185" y="236.348"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="13px" font-weight="400" fill="#a1acb8"
                                                            class="apexcharts-text apexcharts-xaxis-label"
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1914">Jul</tspan>
                                                            <title>Jul</title>
                                                        </text><text id="SvgjsText1916"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="228.73560602014717" y="236.348"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="13px" font-weight="400" fill="#a1acb8"
                                                            class="apexcharts-text apexcharts-xaxis-label"
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1917">Aug</tspan>
                                                            <title>Aug</title>
                                                        </text><text id="SvgjsText1919"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="261.4121211658825" y="236.348"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="13px" font-weight="400" fill="#a1acb8"
                                                            class="apexcharts-text apexcharts-xaxis-label"
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1920">Sep</tspan>
                                                            <title>Sep</title>
                                                        </text><text id="SvgjsText1922"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="294.08863631161785" y="236.348"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="13px" font-weight="400" fill="#a1acb8"
                                                            class="apexcharts-text apexcharts-xaxis-label"
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1923">Oct</tspan>
                                                            <title>Oct</title>
                                                        </text><text id="SvgjsText1925"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="326.76515145735317" y="236.348"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="13px" font-weight="400" fill="#a1acb8"
                                                            class="apexcharts-text apexcharts-xaxis-label"
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1926">Nov</tspan>
                                                            <title>Nov</title>
                                                        </text><text id="SvgjsText1928"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="359.4416666030885" y="236.348"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="13px" font-weight="400" fill="#a1acb8"
                                                            class="apexcharts-text apexcharts-xaxis-label"
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1929">Dec</tspan>
                                                            <title>Dec</title>
                                                        </text></g>
                                                </g>
                                                <g id="SvgjsG1944" class="apexcharts-grid">
                                                    <g id="SvgjsG1945" class="apexcharts-gridlines-horizontal">
                                                        <line id="SvgjsLine1947" x1="0" y1="0"
                                                            x2="359.4416666030884" y2="0" stroke="#eceef1"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1948" x1="0" y1="41.4696"
                                                            x2="359.4416666030884" y2="41.4696" stroke="#eceef1"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1949" x1="0" y1="82.9392"
                                                            x2="359.4416666030884" y2="82.9392" stroke="#eceef1"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1950" x1="0" y1="124.4088"
                                                            x2="359.4416666030884" y2="124.4088" stroke="#eceef1"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1951" x1="0" y1="165.8784"
                                                            x2="359.4416666030884" y2="165.8784" stroke="#eceef1"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1952" x1="0" y1="207.348"
                                                            x2="359.4416666030884" y2="207.348" stroke="#eceef1"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1946" class="apexcharts-gridlines-vertical"></g>
                                                    <line id="SvgjsLine1954" x1="0" y1="207.348"
                                                        x2="359.4416666030884" y2="207.348" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    <line id="SvgjsLine1953" x1="0" y1="1"
                                                        x2="0" y2="207.348" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                </g>
                                                <g id="SvgjsG1870"
                                                    class="apexcharts-area-series apexcharts-plot-series">
                                                    <g id="SvgjsG1871" class="apexcharts-series"
                                                        seriesName="seriesx1" data:longestSeries="true"
                                                        rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath1878"
                                                            d="M 0 207.348L 0 109.89444L 32.67651514573531 109.89444L 65.35303029147062 49.76352L 98.02954543720593 49.76352L 130.70606058294123 126.48228000000002L 163.38257572867656 126.48228000000002L 196.05909087441185 174.17232L 228.73560602014717 174.17232L 261.41212116588247 93.3066L 294.0886363116178 93.3066L 326.7651514573531 12.440879999999993L 359.4416666030884 12.440879999999993L 359.4416666030884 207.348M 359.4416666030884 12.440879999999993z"
                                                            fill="url(#SvgjsLinearGradient1874)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt"
                                                            stroke-width="0" stroke-dasharray="0"
                                                            class="apexcharts-area" index="0"
                                                            clip-path="url(#gridRectMaskqbq4xq0qg)"
                                                            filter="url(#SvgjsFilter1879)"
                                                            pathTo="M 0 207.348L 0 109.89444L 32.67651514573531 109.89444L 65.35303029147062 49.76352L 98.02954543720593 49.76352L 130.70606058294123 126.48228000000002L 163.38257572867656 126.48228000000002L 196.05909087441185 174.17232L 228.73560602014717 174.17232L 261.41212116588247 93.3066L 294.0886363116178 93.3066L 326.7651514573531 12.440879999999993L 359.4416666030884 12.440879999999993L 359.4416666030884 207.348M 359.4416666030884 12.440879999999993z"
                                                            pathFrom="M -1 248.81760000000003L -1 248.81760000000003L 32.67651514573531 248.81760000000003L 65.35303029147062 248.81760000000003L 98.02954543720593 248.81760000000003L 130.70606058294123 248.81760000000003L 163.38257572867656 248.81760000000003L 196.05909087441185 248.81760000000003L 228.73560602014717 248.81760000000003L 261.41212116588247 248.81760000000003L 294.0886363116178 248.81760000000003L 326.7651514573531 248.81760000000003L 359.4416666030884 248.81760000000003">
                                                        </path>
                                                        <path id="SvgjsPath1885"
                                                            d="M 0 109.89444L 32.67651514573531 109.89444L 65.35303029147062 49.76352L 98.02954543720593 49.76352L 130.70606058294123 126.48228000000002L 163.38257572867656 126.48228000000002L 196.05909087441185 174.17232L 228.73560602014717 174.17232L 261.41212116588247 93.3066L 294.0886363116178 93.3066L 326.7651514573531 12.440879999999993L 359.4416666030884 12.440879999999993"
                                                            fill="none" fill-opacity="1" stroke="#696cff"
                                                            stroke-opacity="1" stroke-linecap="butt"
                                                            stroke-width="3" stroke-dasharray="0"
                                                            class="apexcharts-area" index="0"
                                                            clip-path="url(#gridRectMaskqbq4xq0qg)"
                                                            filter="url(#SvgjsFilter1886)"
                                                            pathTo="M 0 109.89444L 32.67651514573531 109.89444L 65.35303029147062 49.76352L 98.02954543720593 49.76352L 130.70606058294123 126.48228000000002L 163.38257572867656 126.48228000000002L 196.05909087441185 174.17232L 228.73560602014717 174.17232L 261.41212116588247 93.3066L 294.0886363116178 93.3066L 326.7651514573531 12.440879999999993L 359.4416666030884 12.440879999999993"
                                                            pathFrom="M -1 248.81760000000003L -1 248.81760000000003L 32.67651514573531 248.81760000000003L 65.35303029147062 248.81760000000003L 98.02954543720593 248.81760000000003L 130.70606058294123 248.81760000000003L 163.38257572867656 248.81760000000003L 196.05909087441185 248.81760000000003L 228.73560602014717 248.81760000000003L 261.41212116588247 248.81760000000003L 294.0886363116178 248.81760000000003L 326.7651514573531 248.81760000000003L 359.4416666030884 248.81760000000003">
                                                        </path>
                                                        <g id="SvgjsG1872" class="apexcharts-series-markers-wrap"
                                                            data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle1960" r="0"
                                                                    cx="0" cy="0"
                                                                    class="apexcharts-marker wte0bgqdp no-pointer-events"
                                                                    stroke="#ffffff" fill="#696cff"
                                                                    fill-opacity="1" stroke-width="2"
                                                                    stroke-opacity="0.9" default-marker-size="0">
                                                                </circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1873" class="apexcharts-datalabels"
                                                        data:realIndex="0"></g>
                                                </g>
                                                <line id="SvgjsLine1955" x1="0" y1="0"
                                                    x2="359.4416666030884" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1956" x1="0" y1="0"
                                                    x2="359.4416666030884" y2="0" stroke-dasharray="0"
                                                    stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG1957" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG1958" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG1959" class="apexcharts-point-annotations"></g>
                                                <rect id="SvgjsRect1961" width="0" height="0"
                                                    x="0" y="0" rx="0" ry="0"
                                                    opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fefefe"
                                                    class="apexcharts-zoom-rect"></rect>
                                                <rect id="SvgjsRect1962" width="0" height="0"
                                                    x="0" y="0" rx="0" ry="0"
                                                    opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fefefe"
                                                    class="apexcharts-selection-rect"></rect>
                                            </g>
                                            <rect id="SvgjsRect1866" width="0" height="0"
                                                x="0" y="0" rx="0" ry="0"
                                                opacity="1" stroke-width="0" stroke="none"
                                                stroke-dasharray="0" fill="#fefefe"></rect>
                                            <g id="SvgjsG1930" class="apexcharts-yaxis" rel="0"
                                                transform="translate(7, 0)">
                                                <g id="SvgjsG1931" class="apexcharts-yaxis-texts-g"><text
                                                        id="SvgjsText1932"
                                                        font-family="Helvetica, Arial, sans-serif" x="20"
                                                        y="16.5" text-anchor="end" dominant-baseline="auto"
                                                        font-size="13px" font-weight="400" fill="#a1acb8"
                                                        class="apexcharts-text apexcharts-yaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1933">$6k</tspan>
                                                        <title>$6k</title>
                                                    </text><text id="SvgjsText1934"
                                                        font-family="Helvetica, Arial, sans-serif" x="20"
                                                        y="57.9696" text-anchor="end" dominant-baseline="auto"
                                                        font-size="13px" font-weight="400" fill="#a1acb8"
                                                        class="apexcharts-text apexcharts-yaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1935">$5k</tspan>
                                                        <title>$5k</title>
                                                    </text><text id="SvgjsText1936"
                                                        font-family="Helvetica, Arial, sans-serif" x="20"
                                                        y="99.4392" text-anchor="end" dominant-baseline="auto"
                                                        font-size="13px" font-weight="400" fill="#a1acb8"
                                                        class="apexcharts-text apexcharts-yaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1937">$4k</tspan>
                                                        <title>$4k</title>
                                                    </text><text id="SvgjsText1938"
                                                        font-family="Helvetica, Arial, sans-serif" x="20"
                                                        y="140.90879999999999" text-anchor="end"
                                                        dominant-baseline="auto" font-size="13px"
                                                        font-weight="400" fill="#a1acb8"
                                                        class="apexcharts-text apexcharts-yaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1939">$3k</tspan>
                                                        <title>$3k</title>
                                                    </text><text id="SvgjsText1940"
                                                        font-family="Helvetica, Arial, sans-serif" x="20"
                                                        y="182.3784" text-anchor="end" dominant-baseline="auto"
                                                        font-size="13px" font-weight="400" fill="#a1acb8"
                                                        class="apexcharts-text apexcharts-yaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1941">$2k</tspan>
                                                        <title>$2k</title>
                                                    </text><text id="SvgjsText1942"
                                                        font-family="Helvetica, Arial, sans-serif" x="20"
                                                        y="223.848" text-anchor="end" dominant-baseline="auto"
                                                        font-size="13px" font-weight="400" fill="#a1acb8"
                                                        class="apexcharts-text apexcharts-yaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1943">$1k</tspan>
                                                        <title>$1k</title>
                                                    </text></g>
                                            </g>
                                            <g id="SvgjsG1863" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend" style="max-height: 125px;"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-title"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            </div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(105, 108, 255);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                            <div class="apexcharts-xaxistooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 462px; height: 290px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-header d-flex justify-content-between">
                                <div>
                                    <h5 class="card-title mb-0">Report</h5>
                                    <small class="card-subtitle">Monthly Avg. $45.578k</small>
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="totalIncome"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalIncome">
                                        <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="report-list">
                                    <div class="report-list-item rounded-2 mb-3">
                                        <div class="d-flex align-items-start">
                                            <div class="report-list-icon me-2 shadow-sm">
                                                <img src="../../assets/svg/icons/paypal-icon.svg" width="22"
                                                    height="22" alt="Paypal">
                                            </div>
                                            <div
                                                class="d-flex justify-content-between align-items-end w-100 flex-wrap gap-2">
                                                <div class="d-flex flex-column">
                                                    <span>Income</span>
                                                    <h5 class="mb-0">$42,845</h5>
                                                </div>
                                                <small class="text-success">+2.34k</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="report-list-item rounded-2 mb-3">
                                        <div class="d-flex align-items-start">
                                            <div class="report-list-icon me-2 shadow-sm">
                                                <img src="../../assets/svg/icons/shopping-bag-icon.svg"
                                                    width="22" height="22" alt="Shopping Bag">
                                            </div>
                                            <div
                                                class="d-flex justify-content-between align-items-end w-100 flex-wrap gap-2">
                                                <div class="d-flex flex-column">
                                                    <span>Expense</span>
                                                    <h5 class="mb-0">$38,658</h5>
                                                </div>
                                                <small class="text-danger">-1.15k</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="report-list-item rounded-2">
                                        <div class="d-flex align-items-start">
                                            <div class="report-list-icon me-2 shadow-sm">
                                                <img src="../../assets/svg/icons/wallet-icon.svg" width="22"
                                                    height="22" alt="Wallet">
                                            </div>
                                            <div
                                                class="d-flex justify-content-between align-items-end w-100 flex-wrap gap-2">
                                                <div class="d-flex flex-column">
                                                    <span>Profit</span>
                                                    <h5 class="mb-0">$18,220</h5>
                                                </div>
                                                <small class="text-success">+1.35k</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Total Income -->
            </div>
            <!--/ Total Income -->
        </div>
        <div class="row">
            <!-- Performance -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0 me-2">Performance</h5>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="performanceId" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="performanceId">
                                <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <small>Earnings: <span class="fw-medium">$846.17</span></small>
                            </div>
                            <div class="col-6">
                                <small>Sales: <span class="fw-medium">25.7M</span></small>
                            </div>
                        </div>
                    </div>
                    <div id="performanceChart" style="min-height: 285px;">
                        <div id="apexchartsu65qi5vh"
                            class="apexcharts-canvas apexchartsu65qi5vh apexcharts-theme-light"
                            style="width: 461px; height: 270px;"><svg id="SvgjsSvg1965" width="461"
                                height="270" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                style="background: transparent;">
                                <foreignObject x="0" y="0" width="461" height="270">
                                    <div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom"
                                        xmlns="http://www.w3.org/1999/xhtml"
                                        style="inset: auto 0px 1px; position: absolute; max-height: 135px;">
                                        <div class="apexcharts-legend-series" style="margin: 2px 10px;"
                                            rel="1" seriesname="Income" data:collapsed="false"><span
                                                class="apexcharts-legend-marker"
                                                style="background: rgb(105, 108, 255) !important; color: rgb(105, 108, 255); height: 10px; width: 10px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"
                                                rel="1" data:collapsed="false"></span><span
                                                class="apexcharts-legend-text"
                                                style="color: rgb(170, 179, 191); font-size: 13px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;"
                                                rel="1" i="0" data:default-text="Income"
                                                data:collapsed="false">Income</span></div>
                                        <div class="apexcharts-legend-series" style="margin: 2px 10px;"
                                            rel="2" seriesname="Earning" data:collapsed="false"><span
                                                class="apexcharts-legend-marker"
                                                style="background: rgb(3, 195, 236) !important; color: rgb(3, 195, 236); height: 10px; width: 10px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"
                                                rel="2" data:collapsed="false"></span><span
                                                class="apexcharts-legend-text"
                                                style="color: rgb(170, 179, 191); font-size: 13px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;"
                                                rel="2" i="1" data:default-text="Earning"
                                                data:collapsed="false">Earning</span></div>
                                    </div>
                                    <style type="text/css">
                                        .apexcharts-legend {
                                            display: flex;
                                            overflow: auto;
                                            padding: 0 10px;
                                        }

                                        .apexcharts-legend.apx-legend-position-bottom,
                                        .apexcharts-legend.apx-legend-position-top {
                                            flex-wrap: wrap
                                        }

                                        .apexcharts-legend.apx-legend-position-right,
                                        .apexcharts-legend.apx-legend-position-left {
                                            flex-direction: column;
                                            bottom: 0;
                                        }

                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                        .apexcharts-legend.apx-legend-position-right,
                                        .apexcharts-legend.apx-legend-position-left {
                                            justify-content: flex-start;
                                        }

                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                            justify-content: center;
                                        }

                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                            justify-content: flex-end;
                                        }

                                        .apexcharts-legend-series {
                                            cursor: pointer;
                                            line-height: normal;
                                        }

                                        .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series,
                                        .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                                            display: flex;
                                            align-items: center;
                                        }

                                        .apexcharts-legend-text {
                                            position: relative;
                                            font-size: 14px;
                                        }

                                        .apexcharts-legend-text *,
                                        .apexcharts-legend-marker * {
                                            pointer-events: none;
                                        }

                                        .apexcharts-legend-marker {
                                            position: relative;
                                            display: inline-block;
                                            cursor: pointer;
                                            margin-right: 3px;
                                            border-style: solid;
                                        }

                                        .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                        .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                            display: inline-block;
                                        }

                                        .apexcharts-legend-series.apexcharts-no-click {
                                            cursor: auto;
                                        }

                                        .apexcharts-legend .apexcharts-hidden-zero-series,
                                        .apexcharts-legend .apexcharts-hidden-null-series {
                                            display: none !important;
                                        }

                                        .apexcharts-inactive-legend {
                                            opacity: 0.45;
                                        }
                                    </style>
                                </foreignObject>
                                <g id="SvgjsG1967" class="apexcharts-inner apexcharts-graphical"
                                    transform="translate(12, 22)">
                                    <defs id="SvgjsDefs1966">
                                        <clipPath id="gridRectMasku65qi5vh">
                                            <rect id="SvgjsRect1970" width="430.5166664123535" height="195"
                                                x="-2" y="0" rx="0" ry="0"
                                                opacity="1" stroke-width="0" stroke="none"
                                                stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="forecastMasku65qi5vh"></clipPath>
                                        <clipPath id="nonForecastMasku65qi5vh"></clipPath>
                                        <clipPath id="gridRectMarkerMasku65qi5vh">
                                            <rect id="SvgjsRect1971" width="430.5166664123535" height="199"
                                                x="-2" y="-2" rx="0" ry="0"
                                                opacity="1" stroke-width="0" stroke="none"
                                                stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <filter id="SvgjsFilter1979" width="200%" height="200%"
                                            x="-50%" y="-50%">
                                            <feFlood id="SvgjsFeFlood1980" flood-color="#000000"
                                                flood-opacity="0.14" result="SvgjsFeFlood1980Out"
                                                in="SourceGraphic"></feFlood>
                                            <feComposite id="SvgjsFeComposite1981" in="SvgjsFeFlood1980Out"
                                                in2="SourceAlpha" operator="in" result="SvgjsFeComposite1981Out">
                                            </feComposite>
                                            <feOffset id="SvgjsFeOffset1982" dx="0" dy="6"
                                                result="SvgjsFeOffset1982Out" in="SvgjsFeComposite1981Out">
                                            </feOffset>
                                            <feGaussianBlur id="SvgjsFeGaussianBlur1983" stdDeviation="6 "
                                                result="SvgjsFeGaussianBlur1983Out" in="SvgjsFeOffset1982Out">
                                            </feGaussianBlur>
                                            <feBlend id="SvgjsFeBlend1984" in="SourceGraphic"
                                                in2="SvgjsFeGaussianBlur1983Out" mode="normal"
                                                result="SvgjsFeBlend1984Out"></feBlend>
                                        </filter>
                                        <filter id="SvgjsFilter2002" width="200%" height="200%"
                                            x="-50%" y="-50%">
                                            <feFlood id="SvgjsFeFlood2003" flood-color="#000000"
                                                flood-opacity="0.14" result="SvgjsFeFlood2003Out"
                                                in="SourceGraphic"></feFlood>
                                            <feComposite id="SvgjsFeComposite2004" in="SvgjsFeFlood2003Out"
                                                in2="SourceAlpha" operator="in" result="SvgjsFeComposite2004Out">
                                            </feComposite>
                                            <feOffset id="SvgjsFeOffset2005" dx="0" dy="6"
                                                result="SvgjsFeOffset2005Out" in="SvgjsFeComposite2004Out">
                                            </feOffset>
                                            <feGaussianBlur id="SvgjsFeGaussianBlur2006" stdDeviation="6 "
                                                result="SvgjsFeGaussianBlur2006Out" in="SvgjsFeOffset2005Out">
                                            </feGaussianBlur>
                                            <feBlend id="SvgjsFeBlend2007" in="SourceGraphic"
                                                in2="SvgjsFeGaussianBlur2006Out" mode="normal"
                                                result="SvgjsFeBlend2007Out"></feBlend>
                                        </filter>
                                    </defs>
                                    <g id="SvgjsG2038" class="apexcharts-grid">
                                        <g id="SvgjsG2039" class="apexcharts-gridlines-horizontal"
                                            style="display: none;">
                                            <line id="SvgjsLine2041" x1="0" y1="0"
                                                x2="426.5166664123535" y2="0" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2042" x1="0" y1="48.75"
                                                x2="426.5166664123535" y2="48.75" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2043" x1="0" y1="97.5"
                                                x2="426.5166664123535" y2="97.5" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2044" x1="0" y1="146.25"
                                                x2="426.5166664123535" y2="146.25" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2045" x1="0" y1="195"
                                                x2="426.5166664123535" y2="195" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                        </g>
                                        <g id="SvgjsG2040" class="apexcharts-gridlines-vertical"
                                            style="display: none;"></g>
                                        <line id="SvgjsLine2047" x1="0" y1="195"
                                            x2="426.5166664123535" y2="195" stroke="transparent"
                                            stroke-dasharray="0" stroke-linecap="butt"></line>
                                        <line id="SvgjsLine2046" x1="0" y1="1" x2="0"
                                            y2="195" stroke="transparent" stroke-dasharray="0"
                                            stroke-linecap="butt"></line>
                                    </g>
                                    <g id="SvgjsG1972" class="apexcharts-radar-series apexcharts-plot-series"
                                        transform="translate(213.25833320617676, 97.5)">
                                        <polygon id="SvgjsPolygon2026"
                                            points="0,-98.73333304268972 85.50557461527882,-49.366666521344875 85.50557461527885,49.36666652134484 1.2091346027987958e-14,98.73333304268972 -85.5055746152788,49.366666521344904 -85.50557461527886,-49.36666652134479 "
                                            fill="none" stroke="#eceef1" stroke-width="1"></polygon>
                                        <polygon id="SvgjsPolygon2027"
                                            points="0,-74.0499997820173 64.12918096145911,-37.024999891008655 64.12918096145914,37.02499989100863 9.068509520990968e-15,74.0499997820173 -64.1291809614591,37.02499989100868 -64.12918096145916,-37.02499989100859 "
                                            fill="none" stroke="#eceef1" stroke-width="1"></polygon>
                                        <polygon id="SvgjsPolygon2028"
                                            points="0,-49.36666652134486 42.75278730763941,-24.683333260672438 42.75278730763942,24.68333326067242 6.045673013993979e-15,49.36666652134486 -42.7527873076394,24.683333260672452 -42.75278730763943,-24.683333260672395 "
                                            fill="none" stroke="#eceef1" stroke-width="1"></polygon>
                                        <polygon id="SvgjsPolygon2029"
                                            points="0,-24.68333326067243 21.376393653819704,-12.341666630336219 21.37639365381971,12.34166663033621 3.0228365069969894e-15,24.68333326067243 -21.3763936538197,12.341666630336226 -21.376393653819715,-12.341666630336197 "
                                            fill="none" stroke="#eceef1" stroke-width="1"></polygon>
                                        <polygon id="SvgjsPolygon2030" points="0,0 0,0 0,0 0,0 0,0 0,0 "
                                            fill="none" stroke="#eceef1" stroke-width="1"></polygon>
                                        <line id="SvgjsLine2020" x1="0" y1="-98.73333304268972"
                                            x2="0" y2="0" stroke="#eceef1" stroke-dasharray="0"
                                            stroke-linecap="butt"></line>
                                        <line id="SvgjsLine2021" x1="85.50557461527882" y1="-49.366666521344875"
                                            x2="0" y2="0" stroke="#eceef1" stroke-dasharray="0"
                                            stroke-linecap="butt"></line>
                                        <line id="SvgjsLine2022" x1="85.50557461527885" y1="49.36666652134484"
                                            x2="0" y2="0" stroke="#eceef1" stroke-dasharray="0"
                                            stroke-linecap="butt"></line>
                                        <line id="SvgjsLine2023" x1="1.2091346027987958e-14"
                                            y1="98.73333304268972" x2="0" y2="0"
                                            stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt"></line>
                                        <line id="SvgjsLine2024" x1="-85.5055746152788" y1="49.366666521344904"
                                            x2="0" y2="0" stroke="#eceef1" stroke-dasharray="0"
                                            stroke-linecap="butt"></line>
                                        <line id="SvgjsLine2025" x1="-85.50557461527886" y1="-49.36666652134479"
                                            x2="0" y2="0" stroke="#eceef1" stroke-dasharray="0"
                                            stroke-linecap="butt"></line>
                                        <g id="SvgjsG2031" class="apexcharts-xaxis"><text id="SvgjsText2032"
                                                font-family="Public Sans" x="0" y="-108.73333304268972"
                                                text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                                font-weight="400" fill="#a1acb8" class="apexcharts-datalabel"
                                                style="font-family: Public Sans;" cx="0"
                                                cy="-108.73333304268972">Jan</text><text id="SvgjsText2033"
                                                font-family="Public Sans" x="95.50557461527882"
                                                y="-49.366666521344875" text-anchor="start"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a1acb8" class="apexcharts-datalabel"
                                                style="font-family: Public Sans;" cx="95.50557461527882"
                                                cy="-49.366666521344875">Feb</text><text id="SvgjsText2034"
                                                font-family="Public Sans" x="95.50557461527885"
                                                y="49.36666652134484" text-anchor="start" dominant-baseline="auto"
                                                font-size="13px" font-weight="400" fill="#a1acb8"
                                                class="apexcharts-datalabel" style="font-family: Public Sans;"
                                                cx="95.50557461527885" cy="49.36666652134484">Mar</text><text
                                                id="SvgjsText2035" font-family="Public Sans"
                                                x="1.2091346027987958e-14" y="108.73333304268972"
                                                text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                                font-weight="400" fill="#a1acb8" class="apexcharts-datalabel"
                                                style="font-family: Public Sans;" cx="1.2091346027987958e-14"
                                                cy="108.73333304268972">Apr</text><text id="SvgjsText2036"
                                                font-family="Public Sans" x="-95.5055746152788"
                                                y="49.366666521344904" text-anchor="end" dominant-baseline="auto"
                                                font-size="13px" font-weight="400" fill="#a1acb8"
                                                class="apexcharts-datalabel" style="font-family: Public Sans;"
                                                cx="-95.5055746152788" cy="49.366666521344904">May</text><text
                                                id="SvgjsText2037" font-family="Public Sans"
                                                x="-95.50557461527886" y="-49.36666652134479" text-anchor="end"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a1acb8" class="apexcharts-datalabel"
                                                style="font-family: Public Sans;" cx="-95.50557461527886"
                                                cy="-49.36666652134479">Jun</text></g>
                                        <g id="SvgjsG1974" class="apexcharts-series" data:longestSeries="true"
                                            seriesName="Income" rel="1" data:realIndex="0">
                                            <path id="SvgjsPath1977"
                                                d="M 0 -64.17666647774833L 0 -64.17666647774833L 61.99154159607714 -35.79083322797503L 66.2668203268411 38.25916655404225L 1.2091346027987958e-14 98.73333304268972L -61.99154159607712 35.79083322797505L -51.30334476916732 -29.619999912806872Z"
                                                fill="none" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-radar" index="0"
                                                pathTo="M 0 -64.17666647774833L 0 -64.17666647774833L 61.99154159607714 -35.79083322797503L 66.2668203268411 38.25916655404225L 1.2091346027987958e-14 98.73333304268972L -61.99154159607712 35.79083322797505L -51.30334476916732 -29.619999912806872Z"
                                                pathFrom="M 0 0"></path>
                                            <path id="SvgjsPath1978"
                                                d="M 0 -64.17666647774833L 0 -64.17666647774833L 61.99154159607714 -35.79083322797503L 66.2668203268411 38.25916655404225L 1.2091346027987958e-14 98.73333304268972L -61.99154159607712 35.79083322797505L -51.30334476916732 -29.619999912806872Z"
                                                fill="rgba(105,108,255,1)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-radar" index="0"
                                                pathTo="M 0 -64.17666647774833L 0 -64.17666647774833L 61.99154159607714 -35.79083322797503L 66.2668203268411 38.25916655404225L 1.2091346027987958e-14 98.73333304268972L -61.99154159607712 35.79083322797505L -51.30334476916732 -29.619999912806872Z"
                                                pathFrom="M 0 0" filter="url(#SvgjsFilter1979)"></path>
                                            <g id="SvgjsG1975" class="apexcharts-series-markers-wrap">
                                                <g id="SvgjsG1986" class="apexcharts-series-markers">
                                                    <circle id="SvgjsCircle1985" r="0" cx="0"
                                                        cy="-64.17666647774833" class="apexcharts-marker"
                                                        stroke="#ffffff" fill="#696cff" fill-opacity="1"
                                                        stroke-width="1" stroke-opacity="1" rel="0"
                                                        j="0" index="0" default-marker-size="0">
                                                    </circle>
                                                </g>
                                                <g id="SvgjsG1988" class="apexcharts-series-markers">
                                                    <circle id="SvgjsCircle1987" r="0"
                                                        cx="61.99154159607714" cy="-35.79083322797503"
                                                        class="apexcharts-marker" stroke="#ffffff" fill="#696cff"
                                                        fill-opacity="1" stroke-width="1" stroke-opacity="1"
                                                        rel="1" j="1" index="0"
                                                        default-marker-size="0"></circle>
                                                </g>
                                                <g id="SvgjsG1990" class="apexcharts-series-markers">
                                                    <circle id="SvgjsCircle1989" r="0"
                                                        cx="66.2668203268411" cy="38.25916655404225"
                                                        class="apexcharts-marker" stroke="#ffffff" fill="#696cff"
                                                        fill-opacity="1" stroke-width="1" stroke-opacity="1"
                                                        rel="2" j="2" index="0"
                                                        default-marker-size="0"></circle>
                                                </g>
                                                <g id="SvgjsG1992" class="apexcharts-series-markers">
                                                    <circle id="SvgjsCircle1991" r="0"
                                                        cx="1.2091346027987958e-14" cy="98.73333304268972"
                                                        class="apexcharts-marker" stroke="#ffffff" fill="#696cff"
                                                        fill-opacity="1" stroke-width="1" stroke-opacity="1"
                                                        rel="3" j="3" index="0"
                                                        default-marker-size="0"></circle>
                                                </g>
                                                <g id="SvgjsG1994" class="apexcharts-series-markers">
                                                    <circle id="SvgjsCircle1993" r="0"
                                                        cx="-61.99154159607712" cy="35.79083322797505"
                                                        class="apexcharts-marker" stroke="#ffffff" fill="#696cff"
                                                        fill-opacity="1" stroke-width="1" stroke-opacity="1"
                                                        rel="4" j="4" index="0"
                                                        default-marker-size="0"></circle>
                                                </g>
                                                <g id="SvgjsG1996" class="apexcharts-series-markers">
                                                    <circle id="SvgjsCircle1995" r="0"
                                                        cx="-51.30334476916732" cy="-29.619999912806872"
                                                        class="apexcharts-marker" stroke="#ffffff" fill="#696cff"
                                                        fill-opacity="1" stroke-width="1" stroke-opacity="1"
                                                        rel="5" j="5" index="0"
                                                        default-marker-size="0"></circle>
                                                </g>
                                                <g class="apexcharts-series-markers">
                                                    <circle id="SvgjsCircle2053" r="0" cx="0"
                                                        cy="0" class="apexcharts-marker w5g76i5f4"
                                                        stroke="#ffffff" fill="#696cff" fill-opacity="1"
                                                        stroke-width="1" stroke-opacity="1"
                                                        default-marker-size="0"></circle>
                                                </g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG1997" class="apexcharts-series" data:longestSeries="true"
                                            seriesName="Earning" rel="2" data:realIndex="1">
                                            <path id="SvgjsPath2000"
                                                d="M 0 -74.0499997820173L 0 -74.0499997820173L 55.57862349993124 -32.08833323887417L 51.3033447691673 29.6199999128069L 7.859374918192173e-15 64.17666647774833L -51.303344769167275 29.61999991280694L -85.50557461527886 -49.36666652134479Z"
                                                fill="none" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-radar" index="1"
                                                pathTo="M 0 -74.0499997820173L 0 -74.0499997820173L 55.57862349993124 -32.08833323887417L 51.3033447691673 29.6199999128069L 7.859374918192173e-15 64.17666647774833L -51.303344769167275 29.61999991280694L -85.50557461527886 -49.36666652134479Z"
                                                pathFrom="M 0 0"></path>
                                            <path id="SvgjsPath2001"
                                                d="M 0 -74.0499997820173L 0 -74.0499997820173L 55.57862349993124 -32.08833323887417L 51.3033447691673 29.6199999128069L 7.859374918192173e-15 64.17666647774833L -51.303344769167275 29.61999991280694L -85.50557461527886 -49.36666652134479Z"
                                                fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-radar" index="1"
                                                pathTo="M 0 -74.0499997820173L 0 -74.0499997820173L 55.57862349993124 -32.08833323887417L 51.3033447691673 29.6199999128069L 7.859374918192173e-15 64.17666647774833L -51.303344769167275 29.61999991280694L -85.50557461527886 -49.36666652134479Z"
                                                pathFrom="M 0 0" filter="url(#SvgjsFilter2002)"></path>
                                            <g id="SvgjsG1998" class="apexcharts-series-markers-wrap">
                                                <g id="SvgjsG2009" class="apexcharts-series-markers">
                                                    <circle id="SvgjsCircle2008" r="0" cx="0"
                                                        cy="-74.0499997820173" class="apexcharts-marker"
                                                        stroke="#ffffff" fill="#03c3ec" fill-opacity="1"
                                                        stroke-width="1" stroke-opacity="1" rel="0"
                                                        j="0" index="1" default-marker-size="0">
                                                    </circle>
                                                </g>
                                                <g id="SvgjsG2011" class="apexcharts-series-markers">
                                                    <circle id="SvgjsCircle2010" r="0"
                                                        cx="55.57862349993124" cy="-32.08833323887417"
                                                        class="apexcharts-marker" stroke="#ffffff" fill="#03c3ec"
                                                        fill-opacity="1" stroke-width="1" stroke-opacity="1"
                                                        rel="1" j="1" index="1"
                                                        default-marker-size="0"></circle>
                                                </g>
                                                <g id="SvgjsG2013" class="apexcharts-series-markers">
                                                    <circle id="SvgjsCircle2012" r="0"
                                                        cx="51.3033447691673" cy="29.6199999128069"
                                                        class="apexcharts-marker" stroke="#ffffff" fill="#03c3ec"
                                                        fill-opacity="1" stroke-width="1" stroke-opacity="1"
                                                        rel="2" j="2" index="1"
                                                        default-marker-size="0"></circle>
                                                </g>
                                                <g id="SvgjsG2015" class="apexcharts-series-markers">
                                                    <circle id="SvgjsCircle2014" r="0"
                                                        cx="7.859374918192173e-15" cy="64.17666647774833"
                                                        class="apexcharts-marker" stroke="#ffffff" fill="#03c3ec"
                                                        fill-opacity="1" stroke-width="1" stroke-opacity="1"
                                                        rel="3" j="3" index="1"
                                                        default-marker-size="0"></circle>
                                                </g>
                                                <g id="SvgjsG2017" class="apexcharts-series-markers">
                                                    <circle id="SvgjsCircle2016" r="0"
                                                        cx="-51.303344769167275" cy="29.61999991280694"
                                                        class="apexcharts-marker" stroke="#ffffff" fill="#03c3ec"
                                                        fill-opacity="1" stroke-width="1" stroke-opacity="1"
                                                        rel="4" j="4" index="1"
                                                        default-marker-size="0"></circle>
                                                </g>
                                                <g id="SvgjsG2019" class="apexcharts-series-markers">
                                                    <circle id="SvgjsCircle2018" r="0"
                                                        cx="-85.50557461527886" cy="-49.36666652134479"
                                                        class="apexcharts-marker" stroke="#ffffff" fill="#03c3ec"
                                                        fill-opacity="1" stroke-width="1" stroke-opacity="1"
                                                        rel="5" j="5" index="1"
                                                        default-marker-size="0"></circle>
                                                </g>
                                                <g class="apexcharts-series-markers">
                                                    <circle id="SvgjsCircle2054" r="0" cx="0"
                                                        cy="0" class="apexcharts-marker wnuc4a9rr"
                                                        stroke="#ffffff" fill="#03c3ec" fill-opacity="1"
                                                        stroke-width="1" stroke-opacity="1"
                                                        default-marker-size="0"></circle>
                                                </g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG1973" class="apexcharts-yaxis"></g>
                                        <g id="SvgjsG1976" class="apexcharts-datalabels" data:realIndex="0"></g>
                                        <g id="SvgjsG1999" class="apexcharts-datalabels" data:realIndex="1"></g>
                                    </g>
                                    <line id="SvgjsLine2048" x1="0" y1="0"
                                        x2="426.5166664123535" y2="0" stroke="#b6b6b6"
                                        stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                        class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine2049" x1="0" y1="0"
                                        x2="426.5166664123535" y2="0" stroke-dasharray="0"
                                        stroke-width="0" stroke-linecap="butt"
                                        class="apexcharts-ycrosshairs-hidden"></line>
                                    <g id="SvgjsG2050" class="apexcharts-yaxis-annotations"></g>
                                    <g id="SvgjsG2051" class="apexcharts-xaxis-annotations"></g>
                                    <g id="SvgjsG2052" class="apexcharts-point-annotations"></g>
                                </g>
                                <g id="SvgjsG1968" class="apexcharts-annotations"></g>
                            </svg>
                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                <div class="apexcharts-tooltip-title"
                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(105, 108, 255);"></span>
                                    <div class="apexcharts-tooltip-text"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(3, 195, 236);"></span>
                                    <div class="apexcharts-tooltip-text"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                <div class="apexcharts-yaxistooltip-text"></div>
                            </div>
                        </div>
                    </div>
                    <div class="resize-triggers">
                        <div class="expand-trigger">
                            <div style="width: 462px; height: 405px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                    </div>
                </div>
            </div>
            <!--/ Performance -->

            <!-- Conversion rate -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <div class="card-title mb-0">
                            <h5 class="m-0 me-2">Conversion Rate</h5>
                            <small class="text-muted">Compared To Last Month</small>
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="conversionRate" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="conversionRate">
                                <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                                <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                <a class="dropdown-item" href="javascript:void(0);">Share</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center" style="position: relative;">
                            <div class="d-flex align-items-center mb-4 flex-row gap-1">
                                <h2 class="mb-2">8.72%</h2>
                                <small class="text-success fw-medium">
                                    <i class="bx bx-chevron-up"></i>
                                    4.8%
                                </small>
                            </div>
                            <div id="conversionRateChart" style="min-height: 80px;">
                                <div id="apexcharts0gu5e6qbl"
                                    class="apexcharts-canvas apexcharts0gu5e6qbl apexcharts-theme-light"
                                    style="width: 140px; height: 80px;"><svg id="SvgjsSvg2055" width="140"
                                        height="80" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS"
                                        transform="translate(0, 0)" style="background: transparent;">
                                        <g id="SvgjsG2057" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(0, 0)">
                                            <defs id="SvgjsDefs2056">
                                                <clipPath id="gridRectMask0gu5e6qbl">
                                                    <rect id="SvgjsRect2062" width="141" height="85"
                                                        x="-4.5" y="-2.5" rx="0"
                                                        ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMask0gu5e6qbl"></clipPath>
                                                <clipPath id="nonForecastMask0gu5e6qbl"></clipPath>
                                                <clipPath id="gridRectMarkerMask0gu5e6qbl">
                                                    <rect id="SvgjsRect2063" width="160" height="108"
                                                        x="-14" y="-14" rx="0"
                                                        ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <filter id="SvgjsFilter2076" filterUnits="userSpaceOnUse"
                                                    width="200%" height="200%" x="-50%" y="-50%">
                                                    <feFlood id="SvgjsFeFlood2077" flood-color="#696cff"
                                                        flood-opacity="0.15" result="SvgjsFeFlood2077Out"
                                                        in="SourceGraphic"></feFlood>
                                                    <feComposite id="SvgjsFeComposite2078" in="SvgjsFeFlood2077Out"
                                                        in2="SourceAlpha" operator="in"
                                                        result="SvgjsFeComposite2078Out"></feComposite>
                                                    <feOffset id="SvgjsFeOffset2079" dx="5" dy="10"
                                                        result="SvgjsFeOffset2079Out" in="SvgjsFeComposite2078Out">
                                                    </feOffset>
                                                    <feGaussianBlur id="SvgjsFeGaussianBlur2080" stdDeviation="3 "
                                                        result="SvgjsFeGaussianBlur2080Out"
                                                        in="SvgjsFeOffset2079Out"></feGaussianBlur>
                                                    <feBlend id="SvgjsFeBlend2081" in="SourceGraphic"
                                                        in2="SvgjsFeGaussianBlur2080Out" mode="normal"
                                                        result="SvgjsFeBlend2081Out"></feBlend>
                                                </filter>
                                            </defs>
                                            <line id="SvgjsLine2061" x1="0" y1="0"
                                                x2="0" y2="80" stroke="#b6b6b6"
                                                stroke-dasharray="3" stroke-linecap="butt"
                                                class="apexcharts-xcrosshairs" x="0" y="0"
                                                width="1" height="80" fill="#b1b9c4" filter="none"
                                                fill-opacity="0.9" stroke-width="1"></line>
                                            <g id="SvgjsG2082" class="apexcharts-xaxis"
                                                transform="translate(0, 0)">
                                                <g id="SvgjsG2083" class="apexcharts-xaxis-texts-g"
                                                    transform="translate(0, -4)"></g>
                                            </g>
                                            <g id="SvgjsG2089" class="apexcharts-grid">
                                                <g id="SvgjsG2090" class="apexcharts-gridlines-horizontal"
                                                    style="display: none;">
                                                    <line id="SvgjsLine2092" x1="0" y1="0"
                                                        x2="132" y2="0" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2093" x1="0" y1="16"
                                                        x2="132" y2="16" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2094" x1="0" y1="32"
                                                        x2="132" y2="32" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2095" x1="0" y1="48"
                                                        x2="132" y2="48" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2096" x1="0" y1="64"
                                                        x2="132" y2="64" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2097" x1="0" y1="80"
                                                        x2="132" y2="80" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG2091" class="apexcharts-gridlines-vertical"
                                                    style="display: none;"></g>
                                                <line id="SvgjsLine2099" x1="0" y1="80"
                                                    x2="132" y2="80" stroke="transparent"
                                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                                <line id="SvgjsLine2098" x1="0" y1="1"
                                                    x2="0" y2="80" stroke="transparent"
                                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                            </g>
                                            <g id="SvgjsG2064"
                                                class="apexcharts-line-series apexcharts-plot-series">
                                                <g id="SvgjsG2065" class="apexcharts-series" seriesName="seriesx1"
                                                    data:longestSeries="true" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath2075"
                                                        d="M 0 70.93333333333334C 15.399999999999999 70.93333333333334 28.6 32 44 32C 59.4 32 72.6 58.66666666666667 88 58.66666666666667C 103.4 58.66666666666667 116.6 13.333333333333343 132 13.333333333333343"
                                                        fill="none" fill-opacity="1"
                                                        stroke="rgba(105,108,255,0.85)" stroke-opacity="1"
                                                        stroke-linecap="butt" stroke-width="5"
                                                        stroke-dasharray="0" class="apexcharts-line"
                                                        index="0" clip-path="url(#gridRectMask0gu5e6qbl)"
                                                        filter="url(#SvgjsFilter2076)"
                                                        pathTo="M 0 70.93333333333334C 15.399999999999999 70.93333333333334 28.6 32 44 32C 59.4 32 72.6 58.66666666666667 88 58.66666666666667C 103.4 58.66666666666667 116.6 13.333333333333343 132 13.333333333333343"
                                                        pathFrom="M -1 144L -1 144L 44 144L 88 144L 132 144"></path>
                                                    <g id="SvgjsG2066" class="apexcharts-series-markers-wrap"
                                                        data:realIndex="0">
                                                        <g id="SvgjsG2068" class="apexcharts-series-markers"
                                                            clip-path="url(#gridRectMarkerMask0gu5e6qbl)">
                                                            <circle id="SvgjsCircle2069" r="6"
                                                                cx="0" cy="70.93333333333334"
                                                                class="apexcharts-marker no-pointer-events wpth9hteh"
                                                                stroke="transparent" fill="transparent"
                                                                fill-opacity="1" stroke-width="4"
                                                                stroke-opacity="0.9" rel="0" j="0"
                                                                index="0" default-marker-size="6"></circle>
                                                            <circle id="SvgjsCircle2070" r="6"
                                                                cx="44" cy="32"
                                                                class="apexcharts-marker no-pointer-events w6smp9wn6"
                                                                stroke="transparent" fill="transparent"
                                                                fill-opacity="1" stroke-width="4"
                                                                stroke-opacity="0.9" rel="1" j="1"
                                                                index="0" default-marker-size="6"></circle>
                                                        </g>
                                                        <g id="SvgjsG2071" class="apexcharts-series-markers"
                                                            clip-path="url(#gridRectMarkerMask0gu5e6qbl)">
                                                            <circle id="SvgjsCircle2072" r="6"
                                                                cx="88" cy="58.66666666666667"
                                                                class="apexcharts-marker no-pointer-events wqa2ouax4"
                                                                stroke="transparent" fill="transparent"
                                                                fill-opacity="1" stroke-width="4"
                                                                stroke-opacity="0.9" rel="2" j="2"
                                                                index="0" default-marker-size="6"></circle>
                                                        </g>
                                                        <g id="SvgjsG2073" class="apexcharts-series-markers"
                                                            clip-path="url(#gridRectMarkerMask0gu5e6qbl)">
                                                            <circle id="SvgjsCircle2074" r="6"
                                                                cx="132" cy="13.333333333333343"
                                                                class="apexcharts-marker no-pointer-events w5r53qea3"
                                                                stroke="#696cff" fill="#ffffff" fill-opacity="1"
                                                                stroke-width="4" stroke-opacity="0.9"
                                                                rel="3" j="3" index="0"
                                                                default-marker-size="6"></circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG2067" class="apexcharts-datalabels"
                                                    data:realIndex="0"></g>
                                            </g>
                                            <line id="SvgjsLine2100" x1="0" y1="0"
                                                x2="132" y2="0" stroke="#b6b6b6"
                                                stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine2101" x1="0" y1="0"
                                                x2="132" y2="0" stroke-dasharray="0"
                                                stroke-width="0" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG2102" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG2103" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG2104" class="apexcharts-point-annotations"></g>
                                        </g>
                                        <rect id="SvgjsRect2060" width="0" height="0" x="0"
                                            y="0" rx="0" ry="0" opacity="1"
                                            stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe">
                                        </rect>
                                        <g id="SvgjsG2088" class="apexcharts-yaxis" rel="0"
                                            transform="translate(-18, 0)"></g>
                                        <g id="SvgjsG2058" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend" style="max-height: 40px;"></div>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                        <div class="apexcharts-tooltip-title"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(105, 108, 255);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                        <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 414px; height: 81px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                        <ul class="m-0 p-0">
                            <li class="d-flex mb-4">
                                <div class="d-flex w-100 justify-content-between flex-wrap gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Impressions</h6>
                                        <small class="text-muted">12.4k Visits</small>
                                    </div>
                                    <div class="user-progress">
                                        <i class="bx bx-up-arrow-alt text-success me-2"></i> <span>12.8%</span>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4">
                                <div class="d-flex w-100 justify-content-between flex-wrap gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Added To Cart</h6>
                                        <small class="text-muted">32 Product in cart</small>
                                    </div>
                                    <div class="user-progress">
                                        <i class="bx bx-down-arrow-alt text-danger me-2"></i> <span>- 8.5% </span>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4">
                                <div class="d-flex w-100 justify-content-between flex-wrap gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Checkout</h6>
                                        <small class="text-muted">21 Products checkout</small>
                                    </div>
                                    <div class="user-progress">
                                        <i class="bx bx-up-arrow-alt text-success me-2"></i> <span>9.12%</span>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="d-flex w-100 justify-content-between flex-wrap gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Purchased</h6>
                                        <small class="text-muted">12 Orders</small>
                                    </div>
                                    <div class="user-progress">
                                        <i class="bx bx-up-arrow-alt text-success me-2"></i> <span>2.83%</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/ Conversion rate -->

            <div class="col-md-12 col-lg-4">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-3 col-lg-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="../../assets/img/icons/unicons/cc-warning.png" alt="Credit Card"
                                            class="rounded">
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn p-0" type="button" id="cardOpt5"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt5">
                                            <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <span class="d-block mb-1">Revenue</span>
                                <h3 class="card-title text-nowrap mb-2">$42,389</h3>
                                <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i>
                                    +52.18%</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 col-lg-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <span class="d-block fw-medium">Sales</span>
                                <h3 class="card-title mb-2">482k</h3>
                                <span class="badge bg-label-info mb-3">+34%</span>
                                <small class="text-muted d-block">Sales Target</small>
                                <div class="d-flex align-items-center">
                                    <div class="progress w-75 me-2" style="height: 8px;">
                                        <div class="progress-bar bg-info" style="width: 78%" role="progressbar"
                                            aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span>78%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between gap-3" style="position: relative;">
                                    <div class="d-flex align-items-start flex-column justify-content-between">
                                        <div class="card-title">
                                            <h5 class="mb-0">Expenses</h5>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div class="mt-auto">
                                                <h3 class="mb-2">$84.7k</h3>
                                                <small class="text-danger text-nowrap fw-medium"><i
                                                        class="bx bx-down-arrow-alt"></i> 8.2%</small>
                                            </div>
                                        </div>
                                        <span class="badge bg-label-secondary rounded-pill">2021 Year</span>
                                    </div>
                                    <div id="expensesBarChart" style="min-height: 165px;">
                                        <div id="apexchartstxip8u2f"
                                            class="apexcharts-canvas apexchartstxip8u2f apexcharts-theme-light"
                                            style="width: 300px; height: 150px;"><svg id="SvgjsSvg2105"
                                                width="300" height="150" xmlns="http://www.w3.org/2000/svg"
                                                version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                style="background: transparent;">
                                                <g id="SvgjsG2107" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(12, 20)">
                                                    <defs id="SvgjsDefs2106">
                                                        <linearGradient id="SvgjsLinearGradient2110" x1="0"
                                                            y1="0" x2="0" y2="1">
                                                            <stop id="SvgjsStop2111" stop-opacity="0.4"
                                                                stop-color="rgba(216,227,240,0.4)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop2112" stop-opacity="0.5"
                                                                stop-color="rgba(190,209,230,0.5)" offset="1">
                                                            </stop>
                                                            <stop id="SvgjsStop2113" stop-opacity="0.5"
                                                                stop-color="rgba(190,209,230,0.5)" offset="1">
                                                            </stop>
                                                        </linearGradient>
                                                        <clipPath id="gridRectMasktxip8u2f">
                                                            <rect id="SvgjsRect2115" width="284" height="117"
                                                                x="-3" y="-1" rx="0"
                                                                ry="0" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0"
                                                                fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMasktxip8u2f"></clipPath>
                                                        <clipPath id="nonForecastMasktxip8u2f"></clipPath>
                                                        <clipPath id="gridRectMarkerMasktxip8u2f">
                                                            <rect id="SvgjsRect2116" width="282" height="119"
                                                                x="-2" y="-2" rx="0"
                                                                ry="0" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0"
                                                                fill="#fff"></rect>
                                                        </clipPath>
                                                    </defs>
                                                    <rect id="SvgjsRect2114" width="11.12" height="115"
                                                        x="0" y="0" rx="0"
                                                        ry="0" opacity="1" stroke-width="0"
                                                        stroke-dasharray="3" fill="url(#SvgjsLinearGradient2110)"
                                                        class="apexcharts-xcrosshairs" y2="115"
                                                        filter="none" fill-opacity="0.9"></rect>
                                                    <g id="SvgjsG2142" class="apexcharts-xaxis"
                                                        transform="translate(0, 0)">
                                                        <g id="SvgjsG2143" class="apexcharts-xaxis-texts-g"
                                                            transform="translate(0, -4)"></g>
                                                    </g>
                                                    <g id="SvgjsG2152" class="apexcharts-grid">
                                                        <g id="SvgjsG2153" class="apexcharts-gridlines-horizontal"
                                                            style="display: none;">
                                                            <line id="SvgjsLine2155" x1="0" y1="0"
                                                                x2="278" y2="0" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine2156" x1="0" y1="28.75"
                                                                x2="278" y2="28.75" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine2157" x1="0" y1="57.5"
                                                                x2="278" y2="57.5" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine2158" x1="0" y1="86.25"
                                                                x2="278" y2="86.25" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine2159" x1="0" y1="115"
                                                                x2="278" y2="115" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                        </g>
                                                        <g id="SvgjsG2154" class="apexcharts-gridlines-vertical"
                                                            style="display: none;"></g>
                                                        <line id="SvgjsLine2161" x1="0" y1="115"
                                                            x2="278" y2="115" stroke="transparent"
                                                            stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        <line id="SvgjsLine2160" x1="0" y1="1"
                                                            x2="0" y2="115" stroke="transparent"
                                                            stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    </g>
                                                    <g id="SvgjsG2117"
                                                        class="apexcharts-bar-series apexcharts-plot-series">
                                                        <g id="SvgjsG2118" class="apexcharts-series"
                                                            seriesName="2021" rel="1" data:realIndex="0">
                                                            <path id="SvgjsPath2120"
                                                                d="M 8.34 57.5L 8.34 39.9375Q 8.34 35.9375 12.34 35.9375L 13.46 35.9375Q 17.46 35.9375 17.46 39.9375L 17.46 39.9375L 17.46 57.5Q 17.46 57.5 17.46 57.5L 8.34 57.5Q 8.34 57.5 8.34 57.5z"
                                                                fill="rgba(105,108,255,0.85)" fill-opacity="1"
                                                                stroke="#ffffff" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0"
                                                                clip-path="url(#gridRectMasktxip8u2f)"
                                                                pathTo="M 8.34 57.5L 8.34 39.9375Q 8.34 35.9375 12.34 35.9375L 13.46 35.9375Q 17.46 35.9375 17.46 39.9375L 17.46 39.9375L 17.46 57.5Q 17.46 57.5 17.46 57.5L 8.34 57.5Q 8.34 57.5 8.34 57.5z"
                                                                pathFrom="M 8.34 57.5L 8.34 57.5L 17.46 57.5L 17.46 57.5L 17.46 57.5L 17.46 57.5L 17.46 57.5L 8.34 57.5"
                                                                cy="35.9375" cx="35.14" j="0"
                                                                val="15" barHeight="21.5625"
                                                                barWidth="11.12"></path>
                                                            <path id="SvgjsPath2121"
                                                                d="M 36.14 57.5L 36.14 8.3125Q 36.14 4.3125 40.14 4.3125L 41.26 4.3125Q 45.26 4.3125 45.26 8.3125L 45.26 8.3125L 45.26 57.5Q 45.26 57.5 45.26 57.5L 36.14 57.5Q 36.14 57.5 36.14 57.5z"
                                                                fill="rgba(105,108,255,0.85)" fill-opacity="1"
                                                                stroke="#ffffff" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0"
                                                                clip-path="url(#gridRectMasktxip8u2f)"
                                                                pathTo="M 36.14 57.5L 36.14 8.3125Q 36.14 4.3125 40.14 4.3125L 41.26 4.3125Q 45.26 4.3125 45.26 8.3125L 45.26 8.3125L 45.26 57.5Q 45.26 57.5 45.26 57.5L 36.14 57.5Q 36.14 57.5 36.14 57.5z"
                                                                pathFrom="M 36.14 57.5L 36.14 57.5L 45.26 57.5L 45.26 57.5L 45.26 57.5L 45.26 57.5L 45.26 57.5L 36.14 57.5"
                                                                cy="4.3125" cx="62.94" j="1"
                                                                val="37" barHeight="53.1875"
                                                                barWidth="11.12"></path>
                                                            <path id="SvgjsPath2122"
                                                                d="M 63.94 57.5L 63.94 41.375Q 63.94 37.375 67.94 37.375L 69.06 37.375Q 73.06 37.375 73.06 41.375L 73.06 41.375L 73.06 57.5Q 73.06 57.5 73.06 57.5L 63.94 57.5Q 63.94 57.5 63.94 57.5z"
                                                                fill="rgba(105,108,255,0.85)" fill-opacity="1"
                                                                stroke="#ffffff" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0"
                                                                clip-path="url(#gridRectMasktxip8u2f)"
                                                                pathTo="M 63.94 57.5L 63.94 41.375Q 63.94 37.375 67.94 37.375L 69.06 37.375Q 73.06 37.375 73.06 41.375L 73.06 41.375L 73.06 57.5Q 73.06 57.5 73.06 57.5L 63.94 57.5Q 63.94 57.5 63.94 57.5z"
                                                                pathFrom="M 63.94 57.5L 63.94 57.5L 73.06 57.5L 73.06 57.5L 73.06 57.5L 73.06 57.5L 73.06 57.5L 63.94 57.5"
                                                                cy="37.375" cx="90.74" j="2"
                                                                val="14" barHeight="20.125"
                                                                barWidth="11.12"></path>
                                                            <path id="SvgjsPath2123"
                                                                d="M 91.74 57.5L 91.74 18.375Q 91.74 14.375 95.74 14.375L 96.86 14.375Q 100.86 14.375 100.86 18.375L 100.86 18.375L 100.86 57.5Q 100.86 57.5 100.86 57.5L 91.74 57.5Q 91.74 57.5 91.74 57.5z"
                                                                fill="rgba(105,108,255,0.85)" fill-opacity="1"
                                                                stroke="#ffffff" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0"
                                                                clip-path="url(#gridRectMasktxip8u2f)"
                                                                pathTo="M 91.74 57.5L 91.74 18.375Q 91.74 14.375 95.74 14.375L 96.86 14.375Q 100.86 14.375 100.86 18.375L 100.86 18.375L 100.86 57.5Q 100.86 57.5 100.86 57.5L 91.74 57.5Q 91.74 57.5 91.74 57.5z"
                                                                pathFrom="M 91.74 57.5L 91.74 57.5L 100.86 57.5L 100.86 57.5L 100.86 57.5L 100.86 57.5L 100.86 57.5L 91.74 57.5"
                                                                cy="14.375" cx="118.53999999999999"
                                                                j="3" val="30" barHeight="43.125"
                                                                barWidth="11.12"></path>
                                                            <path id="SvgjsPath2124"
                                                                d="M 119.53999999999999 57.5L 119.53999999999999 6.875Q 119.53999999999999 2.875 123.53999999999999 2.875L 124.66 2.875Q 128.66 2.875 128.66 6.875L 128.66 6.875L 128.66 57.5Q 128.66 57.5 128.66 57.5L 119.53999999999999 57.5Q 119.53999999999999 57.5 119.53999999999999 57.5z"
                                                                fill="rgba(105,108,255,0.85)" fill-opacity="1"
                                                                stroke="#ffffff" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0"
                                                                clip-path="url(#gridRectMasktxip8u2f)"
                                                                pathTo="M 119.53999999999999 57.5L 119.53999999999999 6.875Q 119.53999999999999 2.875 123.53999999999999 2.875L 124.66 2.875Q 128.66 2.875 128.66 6.875L 128.66 6.875L 128.66 57.5Q 128.66 57.5 128.66 57.5L 119.53999999999999 57.5Q 119.53999999999999 57.5 119.53999999999999 57.5z"
                                                                pathFrom="M 119.53999999999999 57.5L 119.53999999999999 57.5L 128.66 57.5L 128.66 57.5L 128.66 57.5L 128.66 57.5L 128.66 57.5L 119.53999999999999 57.5"
                                                                cy="2.875" cx="146.34" j="4"
                                                                val="38" barHeight="54.625"
                                                                barWidth="11.12"></path>
                                                            <path id="SvgjsPath2125"
                                                                d="M 147.34 57.5L 147.34 18.375Q 147.34 14.375 151.34 14.375L 152.46 14.375Q 156.46 14.375 156.46 18.375L 156.46 18.375L 156.46 57.5Q 156.46 57.5 156.46 57.5L 147.34 57.5Q 147.34 57.5 147.34 57.5z"
                                                                fill="rgba(105,108,255,0.85)" fill-opacity="1"
                                                                stroke="#ffffff" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0"
                                                                clip-path="url(#gridRectMasktxip8u2f)"
                                                                pathTo="M 147.34 57.5L 147.34 18.375Q 147.34 14.375 151.34 14.375L 152.46 14.375Q 156.46 14.375 156.46 18.375L 156.46 18.375L 156.46 57.5Q 156.46 57.5 156.46 57.5L 147.34 57.5Q 147.34 57.5 147.34 57.5z"
                                                                pathFrom="M 147.34 57.5L 147.34 57.5L 156.46 57.5L 156.46 57.5L 156.46 57.5L 156.46 57.5L 156.46 57.5L 147.34 57.5"
                                                                cy="14.375" cx="174.14000000000001"
                                                                j="5" val="30" barHeight="43.125"
                                                                barWidth="11.12"></path>
                                                            <path id="SvgjsPath2126"
                                                                d="M 175.14000000000001 57.5L 175.14000000000001 32.75Q 175.14000000000001 28.75 179.14000000000001 28.75L 180.26000000000002 28.75Q 184.26000000000002 28.75 184.26000000000002 32.75L 184.26000000000002 32.75L 184.26000000000002 57.5Q 184.26000000000002 57.5 184.26000000000002 57.5L 175.14000000000001 57.5Q 175.14000000000001 57.5 175.14000000000001 57.5z"
                                                                fill="rgba(105,108,255,0.85)" fill-opacity="1"
                                                                stroke="#ffffff" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0"
                                                                clip-path="url(#gridRectMasktxip8u2f)"
                                                                pathTo="M 175.14000000000001 57.5L 175.14000000000001 32.75Q 175.14000000000001 28.75 179.14000000000001 28.75L 180.26000000000002 28.75Q 184.26000000000002 28.75 184.26000000000002 32.75L 184.26000000000002 32.75L 184.26000000000002 57.5Q 184.26000000000002 57.5 184.26000000000002 57.5L 175.14000000000001 57.5Q 175.14000000000001 57.5 175.14000000000001 57.5z"
                                                                pathFrom="M 175.14000000000001 57.5L 175.14000000000001 57.5L 184.26000000000002 57.5L 184.26000000000002 57.5L 184.26000000000002 57.5L 184.26000000000002 57.5L 184.26000000000002 57.5L 175.14000000000001 57.5"
                                                                cy="28.75" cx="201.94000000000003"
                                                                j="6" val="20" barHeight="28.75"
                                                                barWidth="11.12"></path>
                                                            <path id="SvgjsPath2127"
                                                                d="M 202.94000000000003 57.5L 202.94000000000003 42.8125Q 202.94000000000003 38.8125 206.94000000000003 38.8125L 208.06000000000003 38.8125Q 212.06000000000003 38.8125 212.06000000000003 42.8125L 212.06000000000003 42.8125L 212.06000000000003 57.5Q 212.06000000000003 57.5 212.06000000000003 57.5L 202.94000000000003 57.5Q 202.94000000000003 57.5 202.94000000000003 57.5z"
                                                                fill="rgba(105,108,255,0.85)" fill-opacity="1"
                                                                stroke="#ffffff" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0"
                                                                clip-path="url(#gridRectMasktxip8u2f)"
                                                                pathTo="M 202.94000000000003 57.5L 202.94000000000003 42.8125Q 202.94000000000003 38.8125 206.94000000000003 38.8125L 208.06000000000003 38.8125Q 212.06000000000003 38.8125 212.06000000000003 42.8125L 212.06000000000003 42.8125L 212.06000000000003 57.5Q 212.06000000000003 57.5 212.06000000000003 57.5L 202.94000000000003 57.5Q 202.94000000000003 57.5 202.94000000000003 57.5z"
                                                                pathFrom="M 202.94000000000003 57.5L 202.94000000000003 57.5L 212.06000000000003 57.5L 212.06000000000003 57.5L 212.06000000000003 57.5L 212.06000000000003 57.5L 212.06000000000003 57.5L 202.94000000000003 57.5"
                                                                cy="38.8125" cx="229.74000000000004"
                                                                j="7" val="13" barHeight="18.6875"
                                                                barWidth="11.12"></path>
                                                            <path id="SvgjsPath2128"
                                                                d="M 230.74000000000004 57.5L 230.74000000000004 41.375Q 230.74000000000004 37.375 234.74000000000004 37.375L 235.86000000000004 37.375Q 239.86000000000004 37.375 239.86000000000004 41.375L 239.86000000000004 41.375L 239.86000000000004 57.5Q 239.86000000000004 57.5 239.86000000000004 57.5L 230.74000000000004 57.5Q 230.74000000000004 57.5 230.74000000000004 57.5z"
                                                                fill="rgba(105,108,255,0.85)" fill-opacity="1"
                                                                stroke="#ffffff" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0"
                                                                clip-path="url(#gridRectMasktxip8u2f)"
                                                                pathTo="M 230.74000000000004 57.5L 230.74000000000004 41.375Q 230.74000000000004 37.375 234.74000000000004 37.375L 235.86000000000004 37.375Q 239.86000000000004 37.375 239.86000000000004 41.375L 239.86000000000004 41.375L 239.86000000000004 57.5Q 239.86000000000004 57.5 239.86000000000004 57.5L 230.74000000000004 57.5Q 230.74000000000004 57.5 230.74000000000004 57.5z"
                                                                pathFrom="M 230.74000000000004 57.5L 230.74000000000004 57.5L 239.86000000000004 57.5L 239.86000000000004 57.5L 239.86000000000004 57.5L 239.86000000000004 57.5L 239.86000000000004 57.5L 230.74000000000004 57.5"
                                                                cy="37.375" cx="257.54" j="8"
                                                                val="14" barHeight="20.125"
                                                                barWidth="11.12"></path>
                                                            <path id="SvgjsPath2129"
                                                                d="M 258.54 57.5L 258.54 28.4375Q 258.54 24.4375 262.54 24.4375L 263.66 24.4375Q 267.66 24.4375 267.66 28.4375L 267.66 28.4375L 267.66 57.5Q 267.66 57.5 267.66 57.5L 258.54 57.5Q 258.54 57.5 258.54 57.5z"
                                                                fill="rgba(105,108,255,0.85)" fill-opacity="1"
                                                                stroke="#ffffff" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0"
                                                                clip-path="url(#gridRectMasktxip8u2f)"
                                                                pathTo="M 258.54 57.5L 258.54 28.4375Q 258.54 24.4375 262.54 24.4375L 263.66 24.4375Q 267.66 24.4375 267.66 28.4375L 267.66 28.4375L 267.66 57.5Q 267.66 57.5 267.66 57.5L 258.54 57.5Q 258.54 57.5 258.54 57.5z"
                                                                pathFrom="M 258.54 57.5L 258.54 57.5L 267.66 57.5L 267.66 57.5L 267.66 57.5L 267.66 57.5L 267.66 57.5L 258.54 57.5"
                                                                cy="24.4375" cx="285.34000000000003"
                                                                j="9" val="23" barHeight="33.0625"
                                                                barWidth="11.12"></path>
                                                        </g>
                                                        <g id="SvgjsG2130" class="apexcharts-series"
                                                            seriesName="2020" rel="2" data:realIndex="1">
                                                            <path id="SvgjsPath2132"
                                                                d="M 8.34 61.5L 8.34 104.9375Q 8.34 108.9375 12.34 108.9375L 13.46 108.9375Q 17.46 108.9375 17.46 104.9375L 17.46 104.9375L 17.46 61.5Q 17.46 61.5 17.46 61.5L 8.34 61.5Q 8.34 61.5 8.34 61.5z"
                                                                fill="rgba(255,171,0,0.85)" fill-opacity="1"
                                                                stroke="#ffffff" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="1"
                                                                clip-path="url(#gridRectMasktxip8u2f)"
                                                                pathTo="M 8.34 61.5L 8.34 104.9375Q 8.34 108.9375 12.34 108.9375L 13.46 108.9375Q 17.46 108.9375 17.46 104.9375L 17.46 104.9375L 17.46 61.5Q 17.46 61.5 17.46 61.5L 8.34 61.5Q 8.34 61.5 8.34 61.5z"
                                                                pathFrom="M 8.34 61.5L 8.34 61.5L 17.46 61.5L 17.46 61.5L 17.46 61.5L 17.46 61.5L 17.46 61.5L 8.34 61.5"
                                                                cy="100.9375" cx="35.14" j="0"
                                                                val="-33" barHeight="-47.4375"
                                                                barWidth="11.12"></path>
                                                            <path id="SvgjsPath2133"
                                                                d="M 36.14 61.5L 36.14 90.5625Q 36.14 94.5625 40.14 94.5625L 41.26 94.5625Q 45.26 94.5625 45.26 90.5625L 45.26 90.5625L 45.26 61.5Q 45.26 61.5 45.26 61.5L 36.14 61.5Q 36.14 61.5 36.14 61.5z"
                                                                fill="rgba(255,171,0,0.85)" fill-opacity="1"
                                                                stroke="#ffffff" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="1"
                                                                clip-path="url(#gridRectMasktxip8u2f)"
                                                                pathTo="M 36.14 61.5L 36.14 90.5625Q 36.14 94.5625 40.14 94.5625L 41.26 94.5625Q 45.26 94.5625 45.26 90.5625L 45.26 90.5625L 45.26 61.5Q 45.26 61.5 45.26 61.5L 36.14 61.5Q 36.14 61.5 36.14 61.5z"
                                                                pathFrom="M 36.14 61.5L 36.14 61.5L 45.26 61.5L 45.26 61.5L 45.26 61.5L 45.26 61.5L 45.26 61.5L 36.14 61.5"
                                                                cy="86.5625" cx="62.94" j="1"
                                                                val="-23" barHeight="-33.0625"
                                                                barWidth="11.12"></path>
                                                            <path id="SvgjsPath2134"
                                                                d="M 63.94 61.5L 63.94 99.1875Q 63.94 103.1875 67.94 103.1875L 69.06 103.1875Q 73.06 103.1875 73.06 99.1875L 73.06 99.1875L 73.06 61.5Q 73.06 61.5 73.06 61.5L 63.94 61.5Q 63.94 61.5 63.94 61.5z"
                                                                fill="rgba(255,171,0,0.85)" fill-opacity="1"
                                                                stroke="#ffffff" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="1"
                                                                clip-path="url(#gridRectMasktxip8u2f)"
                                                                pathTo="M 63.94 61.5L 63.94 99.1875Q 63.94 103.1875 67.94 103.1875L 69.06 103.1875Q 73.06 103.1875 73.06 99.1875L 73.06 99.1875L 73.06 61.5Q 73.06 61.5 73.06 61.5L 63.94 61.5Q 63.94 61.5 63.94 61.5z"
                                                                pathFrom="M 63.94 61.5L 63.94 61.5L 73.06 61.5L 73.06 61.5L 73.06 61.5L 73.06 61.5L 73.06 61.5L 63.94 61.5"
                                                                cy="95.1875" cx="90.74" j="2"
                                                                val="-29" barHeight="-41.6875"
                                                                barWidth="11.12"></path>
                                                            <path id="SvgjsPath2135"
                                                                d="M 91.74 61.5L 91.74 87.6875Q 91.74 91.6875 95.74 91.6875L 96.86 91.6875Q 100.86 91.6875 100.86 87.6875L 100.86 87.6875L 100.86 61.5Q 100.86 61.5 100.86 61.5L 91.74 61.5Q 91.74 61.5 91.74 61.5z"
                                                                fill="rgba(255,171,0,0.85)" fill-opacity="1"
                                                                stroke="#ffffff" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="1"
                                                                clip-path="url(#gridRectMasktxip8u2f)"
                                                                pathTo="M 91.74 61.5L 91.74 87.6875Q 91.74 91.6875 95.74 91.6875L 96.86 91.6875Q 100.86 91.6875 100.86 87.6875L 100.86 87.6875L 100.86 61.5Q 100.86 61.5 100.86 61.5L 91.74 61.5Q 91.74 61.5 91.74 61.5z"
                                                                pathFrom="M 91.74 61.5L 91.74 61.5L 100.86 61.5L 100.86 61.5L 100.86 61.5L 100.86 61.5L 100.86 61.5L 91.74 61.5"
                                                                cy="83.6875" cx="118.53999999999999"
                                                                j="3" val="-21" barHeight="-30.1875"
                                                                barWidth="11.12"></path>
                                                            <path id="SvgjsPath2136"
                                                                d="M 119.53999999999999 61.5L 119.53999999999999 93.4375Q 119.53999999999999 97.4375 123.53999999999999 97.4375L 124.66 97.4375Q 128.66 97.4375 128.66 93.4375L 128.66 93.4375L 128.66 61.5Q 128.66 61.5 128.66 61.5L 119.53999999999999 61.5Q 119.53999999999999 61.5 119.53999999999999 61.5z"
                                                                fill="rgba(255,171,0,0.85)" fill-opacity="1"
                                                                stroke="#ffffff" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="1"
                                                                clip-path="url(#gridRectMasktxip8u2f)"
                                                                pathTo="M 119.53999999999999 61.5L 119.53999999999999 93.4375Q 119.53999999999999 97.4375 123.53999999999999 97.4375L 124.66 97.4375Q 128.66 97.4375 128.66 93.4375L 128.66 93.4375L 128.66 61.5Q 128.66 61.5 128.66 61.5L 119.53999999999999 61.5Q 119.53999999999999 61.5 119.53999999999999 61.5z"
                                                                pathFrom="M 119.53999999999999 61.5L 119.53999999999999 61.5L 128.66 61.5L 128.66 61.5L 128.66 61.5L 128.66 61.5L 128.66 61.5L 119.53999999999999 61.5"
                                                                cy="89.4375" cx="146.34" j="4"
                                                                val="-25" barHeight="-35.9375"
                                                                barWidth="11.12"></path>
                                                            <path id="SvgjsPath2137"
                                                                d="M 147.34 61.5L 147.34 87.6875Q 147.34 91.6875 151.34 91.6875L 152.46 91.6875Q 156.46 91.6875 156.46 87.6875L 156.46 87.6875L 156.46 61.5Q 156.46 61.5 156.46 61.5L 147.34 61.5Q 147.34 61.5 147.34 61.5z"
                                                                fill="rgba(255,171,0,0.85)" fill-opacity="1"
                                                                stroke="#ffffff" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="1"
                                                                clip-path="url(#gridRectMasktxip8u2f)"
                                                                pathTo="M 147.34 61.5L 147.34 87.6875Q 147.34 91.6875 151.34 91.6875L 152.46 91.6875Q 156.46 91.6875 156.46 87.6875L 156.46 87.6875L 156.46 61.5Q 156.46 61.5 156.46 61.5L 147.34 61.5Q 147.34 61.5 147.34 61.5z"
                                                                pathFrom="M 147.34 61.5L 147.34 61.5L 156.46 61.5L 156.46 61.5L 156.46 61.5L 156.46 61.5L 156.46 61.5L 147.34 61.5"
                                                                cy="83.6875" cx="174.14000000000001"
                                                                j="5" val="-21" barHeight="-30.1875"
                                                                barWidth="11.12"></path>
                                                            <path id="SvgjsPath2138"
                                                                d="M 175.14000000000001 61.5L 175.14000000000001 90.5625Q 175.14000000000001 94.5625 179.14000000000001 94.5625L 180.26000000000002 94.5625Q 184.26000000000002 94.5625 184.26000000000002 90.5625L 184.26000000000002 90.5625L 184.26000000000002 61.5Q 184.26000000000002 61.5 184.26000000000002 61.5L 175.14000000000001 61.5Q 175.14000000000001 61.5 175.14000000000001 61.5z"
                                                                fill="rgba(255,171,0,0.85)" fill-opacity="1"
                                                                stroke="#ffffff" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="1"
                                                                clip-path="url(#gridRectMasktxip8u2f)"
                                                                pathTo="M 175.14000000000001 61.5L 175.14000000000001 90.5625Q 175.14000000000001 94.5625 179.14000000000001 94.5625L 180.26000000000002 94.5625Q 184.26000000000002 94.5625 184.26000000000002 90.5625L 184.26000000000002 90.5625L 184.26000000000002 61.5Q 184.26000000000002 61.5 184.26000000000002 61.5L 175.14000000000001 61.5Q 175.14000000000001 61.5 175.14000000000001 61.5z"
                                                                pathFrom="M 175.14000000000001 61.5L 175.14000000000001 61.5L 184.26000000000002 61.5L 184.26000000000002 61.5L 184.26000000000002 61.5L 184.26000000000002 61.5L 184.26000000000002 61.5L 175.14000000000001 61.5"
                                                                cy="86.5625" cx="201.94000000000003"
                                                                j="6" val="-23" barHeight="-33.0625"
                                                                barWidth="11.12"></path>
                                                            <path id="SvgjsPath2139"
                                                                d="M 202.94000000000003 61.5L 202.94000000000003 84.8125Q 202.94000000000003 88.8125 206.94000000000003 88.8125L 208.06000000000003 88.8125Q 212.06000000000003 88.8125 212.06000000000003 84.8125L 212.06000000000003 84.8125L 212.06000000000003 61.5Q 212.06000000000003 61.5 212.06000000000003 61.5L 202.94000000000003 61.5Q 202.94000000000003 61.5 202.94000000000003 61.5z"
                                                                fill="rgba(255,171,0,0.85)" fill-opacity="1"
                                                                stroke="#ffffff" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="1"
                                                                clip-path="url(#gridRectMasktxip8u2f)"
                                                                pathTo="M 202.94000000000003 61.5L 202.94000000000003 84.8125Q 202.94000000000003 88.8125 206.94000000000003 88.8125L 208.06000000000003 88.8125Q 212.06000000000003 88.8125 212.06000000000003 84.8125L 212.06000000000003 84.8125L 212.06000000000003 61.5Q 212.06000000000003 61.5 212.06000000000003 61.5L 202.94000000000003 61.5Q 202.94000000000003 61.5 202.94000000000003 61.5z"
                                                                pathFrom="M 202.94000000000003 61.5L 202.94000000000003 61.5L 212.06000000000003 61.5L 212.06000000000003 61.5L 212.06000000000003 61.5L 212.06000000000003 61.5L 212.06000000000003 61.5L 202.94000000000003 61.5"
                                                                cy="80.8125" cx="229.74000000000004"
                                                                j="7" val="-19" barHeight="-27.3125"
                                                                barWidth="11.12"></path>
                                                            <path id="SvgjsPath2140"
                                                                d="M 230.74000000000004 61.5L 230.74000000000004 110.6875Q 230.74000000000004 114.6875 234.74000000000004 114.6875L 235.86000000000004 114.6875Q 239.86000000000004 114.6875 239.86000000000004 110.6875L 239.86000000000004 110.6875L 239.86000000000004 61.5Q 239.86000000000004 61.5 239.86000000000004 61.5L 230.74000000000004 61.5Q 230.74000000000004 61.5 230.74000000000004 61.5z"
                                                                fill="rgba(255,171,0,0.85)" fill-opacity="1"
                                                                stroke="#ffffff" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="1"
                                                                clip-path="url(#gridRectMasktxip8u2f)"
                                                                pathTo="M 230.74000000000004 61.5L 230.74000000000004 110.6875Q 230.74000000000004 114.6875 234.74000000000004 114.6875L 235.86000000000004 114.6875Q 239.86000000000004 114.6875 239.86000000000004 110.6875L 239.86000000000004 110.6875L 239.86000000000004 61.5Q 239.86000000000004 61.5 239.86000000000004 61.5L 230.74000000000004 61.5Q 230.74000000000004 61.5 230.74000000000004 61.5z"
                                                                pathFrom="M 230.74000000000004 61.5L 230.74000000000004 61.5L 239.86000000000004 61.5L 239.86000000000004 61.5L 239.86000000000004 61.5L 239.86000000000004 61.5L 239.86000000000004 61.5L 230.74000000000004 61.5"
                                                                cy="106.6875" cx="257.54" j="8"
                                                                val="-37" barHeight="-53.1875"
                                                                barWidth="11.12"></path>
                                                            <path id="SvgjsPath2141"
                                                                d="M 258.54 61.5L 258.54 89.125Q 258.54 93.125 262.54 93.125L 263.66 93.125Q 267.66 93.125 267.66 89.125L 267.66 89.125L 267.66 61.5Q 267.66 61.5 267.66 61.5L 258.54 61.5Q 258.54 61.5 258.54 61.5z"
                                                                fill="rgba(255,171,0,0.85)" fill-opacity="1"
                                                                stroke="#ffffff" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="1"
                                                                clip-path="url(#gridRectMasktxip8u2f)"
                                                                pathTo="M 258.54 61.5L 258.54 89.125Q 258.54 93.125 262.54 93.125L 263.66 93.125Q 267.66 93.125 267.66 89.125L 267.66 89.125L 267.66 61.5Q 267.66 61.5 267.66 61.5L 258.54 61.5Q 258.54 61.5 258.54 61.5z"
                                                                pathFrom="M 258.54 61.5L 258.54 61.5L 267.66 61.5L 267.66 61.5L 267.66 61.5L 267.66 61.5L 267.66 61.5L 258.54 61.5"
                                                                cy="85.125" cx="285.34000000000003"
                                                                j="9" val="-22" barHeight="-31.625"
                                                                barWidth="11.12"></path>
                                                        </g>
                                                        <g id="SvgjsG2119" class="apexcharts-datalabels"
                                                            data:realIndex="0"></g>
                                                        <g id="SvgjsG2131" class="apexcharts-datalabels"
                                                            data:realIndex="1"></g>
                                                    </g>
                                                    <line id="SvgjsLine2162" x1="0" y1="0"
                                                        x2="278" y2="0" stroke="#b6b6b6"
                                                        stroke-dasharray="0" stroke-width="1"
                                                        stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine2163" x1="0" y1="0"
                                                        x2="278" y2="0" stroke-dasharray="0"
                                                        stroke-width="0" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG2164" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG2165" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG2166" class="apexcharts-point-annotations"></g>
                                                </g>
                                                <g id="SvgjsG2151" class="apexcharts-yaxis" rel="0"
                                                    transform="translate(-18, 0)"></g>
                                                <g id="SvgjsG2108" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-legend" style="max-height: 75px;"></div>
                                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                                <div class="apexcharts-tooltip-title"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                </div>
                                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(105, 108, 255);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span
                                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                                class="apexcharts-tooltip-text-goals-value"></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(255, 171, 0);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span
                                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                                class="apexcharts-tooltip-text-goals-value"></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                <div class="apexcharts-yaxistooltip-text"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="resize-triggers">
                                        <div class="expand-trigger">
                                            <div style="width: 414px; height: 166px;"></div>
                                        </div>
                                        <div class="contract-trigger"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Total Balance -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0 me-2">Total Balance</h5>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="totalBalance" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalBalance">
                                <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body" style="position: relative;">
                        <div class="d-flex justify-content-start">
                            <div class="d-flex pe-4">
                                <div class="me-3">
                                    <span class="badge bg-label-warning p-2"><i
                                            class="bx bx-wallet text-warning"></i></span>
                                </div>
                                <div>
                                    <h6 class="mb-0">$2.54k</h6>
                                    <small>Wallet</small>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="me-3">
                                    <span class="badge bg-label-secondary p-2"><i
                                            class="bx bx-dollar text-secondary"></i></span>
                                </div>
                                <div>
                                    <h6 class="mb-0">$4.2k</h6>
                                    <small>Paypal</small>
                                </div>
                            </div>
                        </div>
                        <div id="totalBalanceChart" class="border-bottom mb-3" style="min-height: 250px;">
                            <div id="apexchartscef9tevk"
                                class="apexcharts-canvas apexchartscef9tevk apexcharts-theme-light"
                                style="width: 413px; height: 250px;"><svg id="SvgjsSvg2167" width="413"
                                    height="250" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                    transform="translate(0, 0)" style="background: transparent;">
                                    <g id="SvgjsG2169" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(10, 20)">
                                        <defs id="SvgjsDefs2168">
                                            <clipPath id="gridRectMaskcef9tevk">
                                                <rect id="SvgjsRect2174" width="398.5166664123535"
                                                    height="186.348" x="-4" y="-2"
                                                    rx="0" ry="0" opacity="1"
                                                    stroke-width="0" stroke="none" stroke-dasharray="0"
                                                    fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMaskcef9tevk"></clipPath>
                                            <clipPath id="nonForecastMaskcef9tevk"></clipPath>
                                            <clipPath id="gridRectMarkerMaskcef9tevk">
                                                <rect id="SvgjsRect2175" width="418.5166664123535"
                                                    height="210.348" x="-14" y="-14"
                                                    rx="0" ry="0" opacity="1"
                                                    stroke-width="0" stroke="none" stroke-dasharray="0"
                                                    fill="#fff"></rect>
                                            </clipPath>
                                            <filter id="SvgjsFilter2192" filterUnits="userSpaceOnUse"
                                                width="200%" height="200%" x="-50%" y="-50%">
                                                <feFlood id="SvgjsFeFlood2193" flood-color="#ffab00"
                                                    flood-opacity="0.15" result="SvgjsFeFlood2193Out"
                                                    in="SourceGraphic"></feFlood>
                                                <feComposite id="SvgjsFeComposite2194" in="SvgjsFeFlood2193Out"
                                                    in2="SourceAlpha" operator="in"
                                                    result="SvgjsFeComposite2194Out"></feComposite>
                                                <feOffset id="SvgjsFeOffset2195" dx="5" dy="10"
                                                    result="SvgjsFeOffset2195Out" in="SvgjsFeComposite2194Out">
                                                </feOffset>
                                                <feGaussianBlur id="SvgjsFeGaussianBlur2196" stdDeviation="3 "
                                                    result="SvgjsFeGaussianBlur2196Out" in="SvgjsFeOffset2195Out">
                                                </feGaussianBlur>
                                                <feBlend id="SvgjsFeBlend2197" in="SourceGraphic"
                                                    in2="SvgjsFeGaussianBlur2196Out" mode="normal"
                                                    result="SvgjsFeBlend2197Out"></feBlend>
                                            </filter>
                                        </defs>
                                        <line id="SvgjsLine2173" x1="0" y1="0" x2="0"
                                            y2="182.348" stroke="#b6b6b6" stroke-dasharray="3"
                                            stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0"
                                            y="0" width="1" height="182.348" fill="#b1b9c4"
                                            filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                        <g id="SvgjsG2198" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG2199" class="apexcharts-xaxis-texts-g"
                                                transform="translate(0, -4)"><text id="SvgjsText2201"
                                                    font-family="Helvetica, Arial, sans-serif" x="0"
                                                    y="211.348" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                    class="apexcharts-text apexcharts-xaxis-label"
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan2202">Jan</tspan>
                                                    <title>Jan</title>
                                                </text><text id="SvgjsText2204"
                                                    font-family="Helvetica, Arial, sans-serif" x="78.10333328247069"
                                                    y="211.348" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                    class="apexcharts-text apexcharts-xaxis-label"
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan2205">Feb</tspan>
                                                    <title>Feb</title>
                                                </text><text id="SvgjsText2207"
                                                    font-family="Helvetica, Arial, sans-serif" x="156.2066665649414"
                                                    y="211.348" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                    class="apexcharts-text apexcharts-xaxis-label"
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan2208">Mar</tspan>
                                                    <title>Mar</title>
                                                </text><text id="SvgjsText2210"
                                                    font-family="Helvetica, Arial, sans-serif"
                                                    x="234.30999984741212" y="211.348" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label"
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan2211">Apr</tspan>
                                                    <title>Apr</title>
                                                </text><text id="SvgjsText2213"
                                                    font-family="Helvetica, Arial, sans-serif"
                                                    x="312.41333312988286" y="211.348" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label"
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan2214">May</tspan>
                                                    <title>May</title>
                                                </text><text id="SvgjsText2216"
                                                    font-family="Helvetica, Arial, sans-serif" x="390.5166664123536"
                                                    y="211.348" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                    class="apexcharts-text apexcharts-xaxis-label"
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan2217">Jun</tspan>
                                                    <title>Jun</title>
                                                </text></g>
                                        </g>
                                        <g id="SvgjsG2220" class="apexcharts-grid">
                                            <g id="SvgjsG2221" class="apexcharts-gridlines-horizontal"
                                                style="display: none;">
                                                <line id="SvgjsLine2223" x1="0" y1="0"
                                                    x2="390.5166664123535" y2="0" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2224" x1="0" y1="36.4696"
                                                    x2="390.5166664123535" y2="36.4696" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2225" x1="0" y1="72.9392"
                                                    x2="390.5166664123535" y2="72.9392" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2226" x1="0" y1="109.4088"
                                                    x2="390.5166664123535" y2="109.4088" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2227" x1="0" y1="145.8784"
                                                    x2="390.5166664123535" y2="145.8784" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2228" x1="0" y1="182.348"
                                                    x2="390.5166664123535" y2="182.348" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG2222" class="apexcharts-gridlines-vertical"
                                                style="display: none;"></g>
                                            <line id="SvgjsLine2230" x1="0" y1="182.348"
                                                x2="390.5166664123535" y2="182.348" stroke="transparent"
                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                            <line id="SvgjsLine2229" x1="0" y1="1"
                                                x2="0" y2="182.348" stroke="transparent"
                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                        </g>
                                        <g id="SvgjsG2176" class="apexcharts-line-series apexcharts-plot-series">
                                            <g id="SvgjsG2177" class="apexcharts-series" seriesName="seriesx1"
                                                data:longestSeries="true" rel="1" data:realIndex="0">
                                                <path id="SvgjsPath2191"
                                                    d="M 0 155.360496C 27.336166648864744 155.360496 50.76716663360595 102.11488000000003 78.1033332824707 102.11488000000003C 105.43949993133545 102.11488000000003 128.87049991607665 138.58448000000004 156.2066665649414 138.58448000000004C 183.54283321380615 138.58448000000004 206.97383319854737 54.70440000000002 234.30999984741212 54.70440000000002C 261.64616649627686 54.70440000000002 285.0771664810181 105.76184000000003 312.4133331298828 105.76184000000003C 339.7494997787476 105.76184000000003 363.1804997634888 25.52872000000002 390.5166664123535 25.52872000000002"
                                                    fill="none" fill-opacity="1" stroke="rgba(255,171,0,0.85)"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="4"
                                                    stroke-dasharray="0" class="apexcharts-line" index="0"
                                                    clip-path="url(#gridRectMaskcef9tevk)"
                                                    filter="url(#SvgjsFilter2192)"
                                                    pathTo="M 0 155.360496C 27.336166648864744 155.360496 50.76716663360595 102.11488000000003 78.1033332824707 102.11488000000003C 105.43949993133545 102.11488000000003 128.87049991607665 138.58448000000004 156.2066665649414 138.58448000000004C 183.54283321380615 138.58448000000004 206.97383319854737 54.70440000000002 234.30999984741212 54.70440000000002C 261.64616649627686 54.70440000000002 285.0771664810181 105.76184000000003 312.4133331298828 105.76184000000003C 339.7494997787476 105.76184000000003 363.1804997634888 25.52872000000002 390.5166664123535 25.52872000000002"
                                                    pathFrom="M -1 255.28720000000004L -1 255.28720000000004L 78.1033332824707 255.28720000000004L 156.2066665649414 255.28720000000004L 234.30999984741212 255.28720000000004L 312.4133331298828 255.28720000000004L 390.5166664123535 255.28720000000004">
                                                </path>
                                                <g id="SvgjsG2178" class="apexcharts-series-markers-wrap"
                                                    data:realIndex="0">
                                                    <g id="SvgjsG2180" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskcef9tevk)">
                                                        <circle id="SvgjsCircle2181" r="6" cx="0"
                                                            cy="155.360496"
                                                            class="apexcharts-marker no-pointer-events w77no44mk"
                                                            stroke="transparent" fill="transparent"
                                                            fill-opacity="1" stroke-width="4" stroke-opacity="0.9"
                                                            rel="0" j="0" index="0"
                                                            default-marker-size="6"></circle>
                                                        <circle id="SvgjsCircle2182" r="6"
                                                            cx="78.1033332824707" cy="102.11488000000003"
                                                            class="apexcharts-marker no-pointer-events wnxw5mgxi"
                                                            stroke="transparent" fill="transparent"
                                                            fill-opacity="1" stroke-width="4" stroke-opacity="0.9"
                                                            rel="1" j="1" index="0"
                                                            default-marker-size="6"></circle>
                                                    </g>
                                                    <g id="SvgjsG2183" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskcef9tevk)">
                                                        <circle id="SvgjsCircle2184" r="6"
                                                            cx="156.2066665649414" cy="138.58448000000004"
                                                            class="apexcharts-marker no-pointer-events wmneih4vik"
                                                            stroke="transparent" fill="transparent"
                                                            fill-opacity="1" stroke-width="4" stroke-opacity="0.9"
                                                            rel="2" j="2" index="0"
                                                            default-marker-size="6"></circle>
                                                    </g>
                                                    <g id="SvgjsG2185" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskcef9tevk)">
                                                        <circle id="SvgjsCircle2186" r="6"
                                                            cx="234.30999984741212" cy="54.70440000000002"
                                                            class="apexcharts-marker no-pointer-events w5hwau7ij"
                                                            stroke="transparent" fill="transparent"
                                                            fill-opacity="1" stroke-width="4" stroke-opacity="0.9"
                                                            rel="3" j="3" index="0"
                                                            default-marker-size="6"></circle>
                                                    </g>
                                                    <g id="SvgjsG2187" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskcef9tevk)">
                                                        <circle id="SvgjsCircle2188" r="6"
                                                            cx="312.4133331298828" cy="105.76184000000003"
                                                            class="apexcharts-marker no-pointer-events w8fkfxmesk"
                                                            stroke="transparent" fill="transparent"
                                                            fill-opacity="1" stroke-width="4" stroke-opacity="0.9"
                                                            rel="4" j="4" index="0"
                                                            default-marker-size="6"></circle>
                                                    </g>
                                                    <g id="SvgjsG2189" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskcef9tevk)">
                                                        <circle id="SvgjsCircle2190" r="6"
                                                            cx="390.5166664123535" cy="25.52872000000002"
                                                            class="apexcharts-marker no-pointer-events we9dkh7m2"
                                                            stroke="#ffab00" fill="#ffffff" fill-opacity="1"
                                                            stroke-width="4" stroke-opacity="0.9" rel="5"
                                                            j="5" index="0" default-marker-size="6">
                                                        </circle>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG2179" class="apexcharts-datalabels" data:realIndex="0">
                                            </g>
                                        </g>
                                        <line id="SvgjsLine2231" x1="0" y1="0"
                                            x2="390.5166664123535" y2="0" stroke="#b6b6b6"
                                            stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine2232" x1="0" y1="0"
                                            x2="390.5166664123535" y2="0" stroke-dasharray="0"
                                            stroke-width="0" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG2233" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG2234" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG2235" class="apexcharts-point-annotations"></g>
                                        <rect id="SvgjsRect2236" width="0" height="0" x="0"
                                            y="0" rx="0" ry="0" opacity="1"
                                            stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"
                                            class="apexcharts-zoom-rect"></rect>
                                        <rect id="SvgjsRect2237" width="0" height="0" x="0"
                                            y="0" rx="0" ry="0" opacity="1"
                                            stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"
                                            class="apexcharts-selection-rect"></rect>
                                    </g>
                                    <rect id="SvgjsRect2172" width="0" height="0" x="0"
                                        y="0" rx="0" ry="0" opacity="1"
                                        stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe">
                                    </rect>
                                    <g id="SvgjsG2218" class="apexcharts-yaxis" rel="0"
                                        transform="translate(-8, 0)">
                                        <g id="SvgjsG2219" class="apexcharts-yaxis-texts-g"></g>
                                    </g>
                                    <g id="SvgjsG2170" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-legend" style="max-height: 125px;"></div>
                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                    <div class="apexcharts-tooltip-title"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(255, 171, 0);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                    <div class="apexcharts-xaxistooltip-text"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                </div>
                                <div
                                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                    <div class="apexcharts-yaxistooltip-text"></div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <small class="text-muted">You have done <span class="fw-medium">57.6%</span> more
                                sales.<br>Check your new badge in your profile.</small>
                            <div>
                                <span class="badge bg-label-warning p-2"><i
                                        class="bx bx-chevron-right text-warning"></i></span>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 462px; height: 370px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Total Balance -->
        </div>


    </div>
</x-app-layout>
