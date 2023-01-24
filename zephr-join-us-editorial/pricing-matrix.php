<?php
$columns = empty($columns) ? [] : $columns;
$GBPPricingMaster = [
	'dl' => [
		'annually' => [
			'price' => 24,
			'joinLink' => 'https://account.1854.photography/join/DG0212G/'
		],
		'quarterly' => [
			'price' => 9,
			'joinLink' => 'https://account.1854.photography/join/DG0203G/'
		]
	],
	'dps' => [
		'annually' => [
			'price' => 99,
			'joinLink' => 'https://account.1854.photography/join/PD0112G/'
		],
		'quarterly' => [
			'price' => 37,
			'joinLink' => 'https://account.1854.photography/join/PD0103G/'
		]
	],
	'da' => [
		'annually' => [
			'price' => 79,
			'joinLink' => 'https://account.1854.photography/join/DA0112G/'
		],
		'quarterly' => [
			'price' => 29,
			'joinLink' => 'https://account.1854.photography/join/DA0103G/'
		]
	],
	'fa' => [
		'annually' => [
			'price' => 119,
			'joinLink' => 'https://account.1854.photography/join/FA0112G/'
		],
		'quarterly' => [
			'price' => 39,
			'joinLink' => 'https://account.1854.photography/join/FA0103G/'
		]
	]
];

$USDPricingMaster = [
	'dl' => [
		'annually' => [
			'price' => 29,
			'joinLink' => 'https://account.1854.photography/join/DG0212U/'
		],
		'quarterly' => [
			'price' => 10,
			'joinLink' => 'https://account.1854.photography/join/DG0203U/'
		]
	],
	'dps' => [
		'annually' => [
			'price' => 129,
			'joinLink' => 'https://account.1854.photography/join/PD0112U/'
		],
		'quarterly' => [
			'price' => 47,
			'joinLink' => 'https://account.1854.photography/join/PD0103U/'
		]
	],
	'da' => [
		'annually' => [
			'price' => 99,
			'joinLink' => 'https://account.1854.photography/join/DA0112U/',
		],
		'quarterly' => [
			'price' => 37,
			'joinLink' => 'https://account.1854.photography/join/DA0103U/'
		]
	],
	'fa' => [
		'annually' => [
			'price' => 149,
			'joinLink' => 'https://account.1854.photography/join/FA0112U/'
		],
		'quarterly' => [
			'price' => 49,
			'joinLink' => 'https://account.1854.photography/join/FA0103U/'
		]
	]
];

$EURPricingMaster = [
	'dl' => [
		'annually' => [
			'price' => 28,
			'joinLink' => 'https://account.1854.photography/join/DG0212E/'
		],
		'quarterly' => [
			'price' => 10,
			'joinLink' => 'https://account.1854.photography/join/DG0203E/'
		]
	],
	'dps' => [
		'annually' => [
			'price' => 109,
			'joinLink' => 'https://account.1854.photography/join/PD0112E/'
		],
		'quarterly' => [
			'price' => 41,
			'joinLink' => 'https://account.1854.photography/join/PD0103E/'
		]
	],
	'da' => [
		'annually' => [
			'price' => 89,
			'joinLink' => 'https://account.1854.photography/join/DA0112E/',
		],
		'quarterly' => [
			'price' => 33,
			'joinLink' => 'https://account.1854.photography/join/DA0103E/'
		]
	],
	'fa' => [
		'annually' => [
			'price' => 129,
			'joinLink' => 'https://account.1854.photography/join/FA0112E/'
		],
		'quarterly' => [
			'price' => 43,
			'joinLink' => 'https://account.1854.photography/join/FA0103E/'
		]
	]
];

$planDisplayNames = [
	'dl' => 'Digital Only',
	'dps' => 'Print & Digital',
	'da' => 'Digial Access',
	'fa' => 'Full Access'
];

$featuredPlan = empty($featuredPlan) ? '' : $featuredPlan;
$featuredPlanColIndex = array_search($featuredPlan, $columns) === false ? 0 : array_search($featuredPlan, $columns) + 2;
$featuredPlanClass = "featured-col-$featuredPlanColIndex";
$availableCurrencyList = [
	'GBP' => [
		'symbol' => '&pound;',
		'zephrClass' => 'GBP_Price_Table',
		'plans' => $GBPPricingMaster
	],
	'USD' => [
		'symbol' => '&dollar;',
		'zephrClass' => 'USD_Price_Table',
		'plans' => $USDPricingMaster
	],
	'EUR' => [
		'symbol' => '&euro;',
		'zephrClass' => 'EUR_Price_Table',
		'plans' => $EURPricingMaster
	]
];
?>
<style>
.section-pricing-tables-mobile .panel-payment-switcher {
text-align: left !important;
}
.section-pricing-tables-mobile .panel-payment-switcher button, .section-pricing-tables-desktop .panel-payment-switcher button {
border: #eaeaea !important;
background: #f7f7f7;
color: #256C69;
width: 160px;
display: inline;
}
.section-pricing-tables-mobile .panel-payment-switcher .btn-selected, .section-pricing-tables-desktop .panel-payment-switcher .btn-selected {
background: #fff;
color: #000;
border: 2px solid #000 !important;
}
.panel-mobile-pricing {
border: none;
}
.panel-mobile-pricing .panel-mobile-pricing--header h2 {
font-size: 30px;
}
.panel-mobile-pricing .badge-save {
color: #256C69;
border: 2px solid #256C69;
padding: 2px 8px;
font-weight: bold;
float: right;
transform: translate(0, -48px);
font-size: 12px;
}
.panel-mobile-pricing .panel-mobile-pricing--header .price {
font-size: 30px;
}
.panel-mobile-pricing .panel-mobile-pricing--content .btn {
display: block;
}
.section-pricing-tables-desktop .badge-save-desktop {
color: #256C69;
border: 2px solid #266b69;
padding: 6px 0;
font-weight: bold;
font-size: 10px;
display: block;
margin: 2px 0;
}
.section-pricing-tables-desktop .btn-cta {
display: block;
background: #266b69;
font-size: 14px;
white-space: nowrap;
}
.section-pricing-tables-desktop .access-price {
white-space: nowrap;
}
.section-pricing-tables-desktop .table-row {
height: 180px;
}
</style>
<div class="annual-pricing-as-default id-join-us-print-monthly-quarterly--03">
	<?php foreach ($availableCurrencyList as $currenyObj) : ?>
		<div id="price-grid" class="<?php echo $currenyObj['zephrClass']; ?>">
			<!-- SECTION :: MOBILE -->
			<div class="section-pricing-tables-mobile">

				<!-- Payment Switcher -->
				<div class="panel-payment-switcher" style="text-align: left !important;">
					<button class="btn-switch-monthly">Pay Quarterly</button><button class="btn-selected btn-switch-annually">Pay Annually</button>
				</div>

				<?php foreach ($columns as $column) : ?>
					<?php $pricingMaster = $currenyObj['plans']; ?>
					<?php $currencySymbol = $currenyObj['symbol']; ?>
					<div class="panel-mobile-pricing <?php echo $featuredPlan === $column ? 'panel--featured' : ''; ?>">
						<div class="panel-mobile-pricing--header">
							<h2><?php echo $planDisplayNames[$column]; ?></h2>

							<div class="annually">
								<span class="badge-save" href="<?php echo $pricingMaster[$column]['annually']['joinLink']; ?>">
									SAVE <?php echo round(($pricingMaster[$column]['quarterly']['price'] - ($pricingMaster[$column]['annually']['price'] / 4)) * 100 / $pricingMaster[$column]['quarterly']['price']); ?>%
								</span>
								<div class="price">
									<?php echo $currencySymbol; ?><?php echo $pricingMaster[$column]['annually']['price'] / 4; ?><span>/ quarter</span>
								</div>
							</div>

							<div class="monthly">
								<div class="price"><?php echo $currencySymbol; ?><?php echo $pricingMaster[$column]['quarterly']['price']; ?><span>/ quarter</span>
								</div>
							</div>
						</div>

						<div class="panel-mobile-pricing--content">
							<p style="color: #000;">Unlimited digital access to British Journal of Photography’s award-winning photographic journalism. </p>
							
							<div class="monthly">
								<a href="<?php echo $pricingMaster[$column]['quarterly']['joinLink']; ?>" class="btn">GET <?php echo $planDisplayNames[$column]; ?></a>
							</div>
							<div class="annually">
								<a href="<?php echo $pricingMaster[$column]['annually']['joinLink']; ?>" class="btn">GET <?php echo $planDisplayNames[$column]; ?></a>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>

			<!-- SECTION :: DESKTOP -->
			<div class="section-pricing-tables-desktop">
				<table id="tbl-pricing" class="<?php echo $featuredPlanClass; ?>">
					<thead>
						<tr class="table-row">
							<th colspan="2">
								<!-- Payment Switcher -->
								<div class="panel-payment-switcher">
									<button class="btn-switch-monthly">Pay Quarterly</button>
									<button class="btn-selected btn-switch-annually">Pay Annually</button>
								</div>
							</th>
							</tr>
							<?php foreach ($columns as $column) : ?>
								<?php $pricingMaster = $currenyObj['plans']; ?>
								<?php $currencySymbol = $currenyObj['symbol']; ?>
								<tr class="table-row">
								<th>
								<h2><?php echo $planDisplayNames[$column]; ?></h2>
								<p style="color: #000;">Unlimited digital access to British Journal of Photography’s award-winning photographic journalism. </p>
								</th>
								<th>
									<div class="annually">
								
										<p class="access-price"><?php echo $currencySymbol; ?><?php echo $pricingMaster[$column]['annually']['price'] / 4; ?><span>/ quarter</span></p>
										<a class="badge-save-desktop" href="#">SAVE <?php echo round(($pricingMaster[$column]['quarterly']['price'] - ($pricingMaster[$column]['annually']['price'] / 4)) * 100 / $pricingMaster[$column]['quarterly']['price']); ?>%</a>
										<a class="btn btn-cta" href="<?php echo $pricingMaster[$column]['annually']['joinLink']; ?>">GET <?php echo $planDisplayNames[$column]; ?></a>
									</div>

									<div class="monthly">
										<p class="access-price"><?php echo $currencySymbol; ?><?php echo $pricingMaster[$column]['quarterly']['price']; ?><span>/ quarter</span></p>
										<a class="btn btn-cta" href="<?php echo $pricingMaster[$column]['quarterly']['joinLink']; ?>">GET <?php echo $planDisplayNames[$column]; ?></a>
									</div>
								</th>
								</tr>
							<?php endforeach; ?>
					</thead>
					
					
				</table>
			</div>
		</div>
	<?php endforeach; ?>
</div>

<script>
	jQuery(document).ready(function($) {
		// PRODUCTS LISTING

		$(".access-tooltip").click(function() {
			$(this).parent().next().slideToggle();
		});

		// Annual Swicth
		$(".btn-switch-annually").click(function() {
			$(".annually").removeClass("annually-hide");
			$(".annually").addClass("annually-show");

			$(".monthly").removeClass("monthly-show");
			$(".monthly").addClass("monthly-hide");

			$(".btn-switch-annually").addClass("btn-selected");
			$(".btn-switch-monthly").removeClass("btn-selected");
		});

		// Monthly Switch
		$(".btn-switch-monthly").click(function() {
			$(".annually").removeClass("annually-show");
			$(".annually").addClass("annually-hide");

			$(".monthly").removeClass("monthly-hide");
			$(".monthly").addClass("monthly-show");

			$(".btn-switch-monthly").addClass("btn-selected");
			$(".btn-switch-annually").removeClass("btn-selected");
		});
	});
</script>
