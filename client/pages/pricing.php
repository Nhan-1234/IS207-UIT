<?php
// require_once '../../server/middleware/auth.php';
// homeRedirect();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Premium Plans</title>
	<?php include './components/metadata.php'; ?>
	<link rel="stylesheet" href="../styles/pricing.css">
</head>

<body>
	<header class="pricing-hero">
		<img src="../img/premium/book.png" class="hero-bg-img img-left" alt="">
		<img src="../img/premium/headset.png" class="hero-bg-img img-right" alt="">
		<h1>Chọn gói phù hợp với mục tiêu TOEIC của bạn</h1>
		<p>Linh hoạt lựa chọn - Học hiệu quả - Tiến bộ mỗi ngày</p>

		<div class="pricing-switch">
			<span class="switch-btn active" id="monthlyBtn">Theo tháng</span>
			<div class="toggle-container" id="priceToggle">
				<div class="toggle-circle"></div>
			</div>
			<span class="switch-btn" id="yearlyBtn">Theo năm</span>
			<span class="discount-badge">Tiết kiệm 20%</span>
		</div>
	</header>

	<main class="pricing-section">
		<div class="pricing-container">
			<!-- FREE -->
			<div class="pricing-card">
				<div class="plan-name">FREE</div>
				<div class="plan-price-wrapper">
					<span class="price-amount" data-monthly="0đ" data-yearly="0đ">0đ</span>
					<span class="price-period" data-monthly-suffix="/tháng" data-yearly-suffix="/tháng">/tháng</span>
				</div>
				<div class="plan-desc">Làm quen với nền tảng, thử sức với đề mẫu</div>

				<ul class="features-list">
					<li class="feature-item"><span class="feature-icon icon-check"><svg
								xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 256 256">
								<rect width="256" height="256" fill="none" />
								<polyline points="216 72.005 104 184 48 128.005" fill="none" stroke="currentColor"
									stroke-linecap="round" stroke-linejoin="round" stroke-width="24" />
							</svg></span> 5 đề thi mẫu / tháng</li>
					<li class="feature-item"><span class="feature-icon icon-check"><svg
								xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 256 256">
								<rect width="256" height="256" fill="none" />
								<polyline points="216 72.005 104 184 48 128.005" fill="none" stroke="currentColor"
									stroke-linecap="round" stroke-linejoin="round" stroke-width="24" />
							</svg></span> Xem đáp án sau khi nộp</li>
					<li class="feature-item"><span class="feature-icon icon-check"><svg
								xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 256 256">
								<rect width="256" height="256" fill="none" />
								<polyline points="216 72.005 104 184 48 128.005" fill="none" stroke="currentColor"
									stroke-linecap="round" stroke-linejoin="round" stroke-width="24" />
							</svg></span> Thống kê kết quả cơ bản</li>
					<li class="feature-item disabled"><span class="feature-icon icon-cross"><svg
								xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 256 256">
								<rect width="256" height="256" fill="none" />
								<line x1="200" y1="56" x2="56" y2="200" fill="none" stroke="currentColor"
									stroke-linecap="round" stroke-linejoin="round" stroke-width="24" />
								<line x1="200" y1="200" x2="56" y2="56" fill="none" stroke="currentColor"
									stroke-linecap="round" stroke-linejoin="round" stroke-width="24" />
							</svg></span> Không có đề mới nhất</li>
					<li class="feature-item disabled"><span class="feature-icon icon-cross"><svg
								xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 256 256">
								<rect width="256" height="256" fill="none" />
								<line x1="200" y1="56" x2="56" y2="200" fill="none" stroke="currentColor"
									stroke-linecap="round" stroke-linejoin="round" stroke-width="24" />
								<line x1="200" y1="200" x2="56" y2="56" fill="none" stroke="currentColor"
									stroke-linecap="round" stroke-linejoin="round" stroke-width="24" />
							</svg></span> Không có giải thích chi tiết</li>
					<li class="feature-item disabled"><span class="feature-icon icon-cross"><svg
								xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 256 256">
								<rect width="256" height="256" fill="none" />
								<line x1="200" y1="56" x2="56" y2="200" fill="none" stroke="currentColor"
									stroke-linecap="round" stroke-linejoin="round" stroke-width="24" />
								<line x1="200" y1="200" x2="56" y2="56" fill="none" stroke="currentColor"
									stroke-linecap="round" stroke-linejoin="round" stroke-width="24" />
							</svg></span> Không có lộ trình học</li>
				</ul>
				<a href="#" class="plan-btn btn-outline">Bắt đầu miễn phí</a>
			</div>

			<!-- PREMIUM -->
			<div class="pricing-card card-featured">
				<span class="featured-tag">Lựa chọn tốt nhất</span>
				<div class="plan-name">PREMIUM</div>
				<div class="plan-price-wrapper">
					<span class="price-amount" data-monthly="63.200đ" data-yearly="49.800đ">63.200đ</span>
					<span class="price-period" data-monthly-suffix="/tháng" data-yearly-suffix="/tháng">/tháng</span>
				</div>
				<div class="plan-desc">Unlock toàn bộ kho đề thi, luôn cập nhật mới nhất.</div>

				<ul class="features-list">
					<li class="feature-item"><span class="feature-icon icon-check"><svg
								xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 256 256">
								<rect width="256" height="256" fill="none" />
								<polyline points="216 72.005 104 184 48 128.005" fill="none" stroke="currentColor"
									stroke-linecap="round" stroke-linejoin="round" stroke-width="24" />
							</svg></span> Toàn bộ kho đề (1.500+ đề)</li>
					<li class="feature-item"><span class="feature-icon icon-check"><svg
								xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 256 256">
								<rect width="256" height="256" fill="none" />
								<polyline points="216 72.005 104 184 48 128.005" fill="none" stroke="currentColor"
									stroke-linecap="round" stroke-linejoin="round" stroke-width="24" />
							</svg></span> Cập nhật đề mới nhất 2026</li>
					<li class="feature-item"><span class="feature-icon icon-check"><svg
								xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 256 256">
								<rect width="256" height="256" fill="none" />
								<polyline points="216 72.005 104 184 48 128.005" fill="none" stroke="currentColor"
									stroke-linecap="round" stroke-linejoin="round" stroke-width="24" />
							</svg></span> Giải thích đáp án chi tiết</li>
					<li class="feature-item"><span class="feature-icon icon-check"><svg
								xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 256 256">
								<rect width="256" height="256" fill="none" />
								<polyline points="216 72.005 104 184 48 128.005" fill="none" stroke="currentColor"
									stroke-linecap="round" stroke-linejoin="round" stroke-width="24" />
							</svg></span> Phân tích điểm yếu theo Part</li>
					<li class="feature-item"><span class="feature-icon icon-check"><svg
								xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 256 256">
								<rect width="256" height="256" fill="none" />
								<polyline points="216 72.005 104 184 48 128.005" fill="none" stroke="currentColor"
									stroke-linecap="round" stroke-linejoin="round" stroke-width="24" />
							</svg></span> Lịch sử & thống kê chi tiết</li>
					<li class="feature-item disabled"><span class="feature-icon icon-cross"><svg
								xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 256 256">
								<rect width="256" height="256" fill="none" />
								<line x1="200" y1="56" x2="56" y2="200" fill="none" stroke="currentColor"
									stroke-linecap="round" stroke-linejoin="round" stroke-width="24" />
								<line x1="200" y1="200" x2="56" y2="56" fill="none" stroke="currentColor"
									stroke-linecap="round" stroke-linejoin="round" stroke-width="24" />
							</svg></span> Không có khoá học video</li>
				</ul>
				<a href="payment.php?plan=pro" class="plan-btn btn-white">Đăng ký ngay</a>
			</div>

			<!-- KHOÁ HỌC -->
			<div class="pricing-card">
				<div class="plan-name">KHOÁ HỌC</div>
				<div class="plan-price-wrapper">
					<span class="price-amount" data-monthly="249.000đ" data-yearly="199.000đ">249.000đ</span>
					<span class="price-period" data-monthly-suffix="/khoá" data-yearly-suffix="/khoá">/khoá</span>
				</div>
				<div class="plan-desc">Mua lẻ khoá học theo mục tiêu, sở hữu vĩnh viễn.</div>

				<ul class="features-list">
					<li class="feature-item"><span class="feature-icon icon-check"><svg
								xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 256 256">
								<rect width="256" height="256" fill="none" />
								<polyline points="216 72.005 104 184 48 128.005" fill="none" stroke="currentColor"
									stroke-linecap="round" stroke-linejoin="round" stroke-width="24" />
							</svg></span> Video bài giảng theo lộ trình</li>
					<li class="feature-item"><span class="feature-icon icon-check"><svg
								xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 256 256">
								<rect width="256" height="256" fill="none" />
								<polyline points="216 72.005 104 184 48 128.005" fill="none" stroke="currentColor"
									stroke-linecap="round" stroke-linejoin="round" stroke-width="24" />
							</svg></span> Bài tập kèm theo mỗi bài học</li>
					<li class="feature-item"><span class="feature-icon icon-check"><svg
								xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 256 256">
								<rect width="256" height="256" fill="none" />
								<polyline points="216 72.005 104 184 48 128.005" fill="none" stroke="currentColor"
									stroke-linecap="round" stroke-linejoin="round" stroke-width="24" />
							</svg></span> Sở hữu trọn đời</li>
					<li class="feature-item"><span class="feature-icon icon-check"><svg
								xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 256 256">
								<rect width="256" height="256" fill="none" />
								<polyline points="216 72.005 104 184 48 128.005" fill="none" stroke="currentColor"
									stroke-linecap="round" stroke-linejoin="round" stroke-width="24" />
							</svg></span> Cập nhật nội dung miễn phí</li>
					<li class="feature-item disabled"><span class="feature-icon icon-cross"><svg
								xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 256 256">
								<rect width="256" height="256" fill="none" />
								<line x1="200" y1="56" x2="56" y2="200" fill="none" stroke="currentColor"
									stroke-linecap="round" stroke-linejoin="round" stroke-width="24" />
								<line x1="200" y1="200" x2="56" y2="56" fill="none" stroke="currentColor"
									stroke-linecap="round" stroke-linejoin="round" stroke-width="24" />
							</svg></span> Không có kho đề Premium</li>
					<li class="feature-item disabled"><span class="feature-icon icon-cross"><svg
								xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 256 256">
								<rect width="256" height="256" fill="none" />
								<line x1="200" y1="56" x2="56" y2="200" fill="none" stroke="currentColor"
									stroke-linecap="round" stroke-linejoin="round" stroke-width="24" />
								<line x1="200" y1="200" x2="56" y2="56" fill="none" stroke="currentColor"
									stroke-linecap="round" stroke-linejoin="round" stroke-width="24" />
							</svg></span> Phân tích điểm yếu nâng cao</li>
				</ul>
				<a href="#" class="plan-btn btn-outline">Xem các khoá học</a>
			</div>

			<!-- TRỌN BỘ -->
			<div class="pricing-card">
				<div class="plan-name">TRỌN BỘ</div>
				<div class="plan-price-wrapper">
					<span class="price-amount" data-monthly="299.000đ" data-yearly="259.000đ">299.000đ</span>
					<span class="price-period" data-monthly-suffix="/khoá" data-yearly-suffix="/khoá">/khoá</span>
				</div>
				<div class="plan-desc">Tiết kiệm nhất cho người nghiêm túc.</div>

				<ul class="features-list">
					<li class="feature-item"><span class="feature-icon icon-check"><svg
								xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 256 256">
								<rect width="256" height="256" fill="none" />
								<polyline points="216 72.005 104 184 48 128.005" fill="none" stroke="currentColor"
									stroke-linecap="round" stroke-linejoin="round" stroke-width="24" />
							</svg></span> Tất cả tính năng Premium</li>
					<li class="feature-item"><span class="feature-icon icon-check"><svg
								xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 256 256">
								<rect width="256" height="256" fill="none" />
								<polyline points="216 72.005 104 184 48 128.005" fill="none" stroke="currentColor"
									stroke-linecap="round" stroke-linejoin="round" stroke-width="24" />
							</svg></span> Toàn bộ khoá học hiện có</li>
					<li class="feature-item"><span class="feature-icon icon-check"><svg
								xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 256 256">
								<rect width="256" height="256" fill="none" />
								<polyline points="216 72.005 104 184 48 128.005" fill="none" stroke="currentColor"
									stroke-linecap="round" stroke-linejoin="round" stroke-width="24" />
							</svg></span> Khoá học mới phát hành</li>
					<li class="feature-item"><span class="feature-icon icon-check"><svg
								xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 256 256">
								<rect width="256" height="256" fill="none" />
								<polyline points="216 72.005 104 184 48 128.005" fill="none" stroke="currentColor"
									stroke-linecap="round" stroke-linejoin="round" stroke-width="24" />
							</svg></span> Lộ trình học cá nhân hoá</li>
					<li class="feature-item"><span class="feature-icon icon-check"><svg
								xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 256 256">
								<rect width="256" height="256" fill="none" />
								<polyline points="216 72.005 104 184 48 128.005" fill="none" stroke="currentColor"
									stroke-linecap="round" stroke-linejoin="round" stroke-width="24" />
							</svg></span> Ưu tiên hỗ trợ</li>
					<li class="feature-item"><span class="feature-icon icon-check"><svg
								xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 256 256">
								<rect width="256" height="256" fill="none" />
								<polyline points="216 72.005 104 184 48 128.005" fill="none" stroke="currentColor"
									stroke-linecap="round" stroke-linejoin="round" stroke-width="24" />
							</svg></span> Chứng chỉ hoàn thành khoá</li>
				</ul>
				<a href="payment.php?plan=ultra" class="plan-btn btn-outline">Đăng ký ngay</a>
			</div>
		</div>
	</main>

	<footer class="pricing-footer">
		<div class="footer-feature">
			<div class="footer-icon">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 256 256">
					<rect width="256" height="256" fill="none" />
					<path
						d="M208,40H48A16,16,0,0,0,32,56v48c0,59.39,41.4,110.42,97.74,127.18a15.89,15.89,0,0,0,8.52,0C194.6,214.42,236,163.39,236,104V56A16,16,0,0,0,208,40Zm-34.34,61.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,140.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z"
						fill="currentColor" />
				</svg>
			</div>
			<div class="footer-text">
				<h4>Thanh toán an toàn</h4>
				<p>Bảo mật tuyệt đối</p>
			</div>
		</div>
		<div class="footer-feature">
			<div class="footer-icon">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 256 256">
					<rect width="256" height="256" fill="none" />
					<polyline points="176 104 216 104 216 64" fill="none" stroke="currentColor" stroke-linecap="round"
						stroke-linejoin="round" stroke-width="16" />
					<path d="M216,104A95.94,95.94,0,0,0,57.17,66.8" fill="none" stroke="currentColor"
						stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
					<polyline points="80 152 40 152 40 192" fill="none" stroke="currentColor" stroke-linecap="round"
						stroke-linejoin="round" stroke-width="16" />
					<path d="M40,152a95.94,95.94,0,0,0,158.83,37.2" fill="none" stroke="currentColor"
						stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
				</svg>
			</div>
			<div class="footer-text">
				<h4>Huỷ gói bất kỳ lúc nào</h4>
				<p>Không ràng buộc</p>
			</div>
		</div>
		<div class="footer-feature">
			<div class="footer-icon">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 256 256">
					<rect width="256" height="256" fill="none" />
					<circle cx="128" cy="128" r="96" fill="none" stroke="currentColor" stroke-linecap="round"
						stroke-linejoin="round" stroke-width="16" />
					<polyline points="128 72 128 128 184 128" fill="none" stroke="currentColor" stroke-linecap="round"
						stroke-linejoin="round" stroke-width="16" />
				</svg>
			</div>
			<div class="footer-text">
				<h4>Kích hoạt ngay lập tức</h4>
				<p>Học ngay không chờ đợi</p>
			</div>
		</div>
		<div class="footer-feature">
			<div class="footer-icon">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 256 256">
					<rect width="256" height="256" fill="none" />
					<path
						d="M128,24A104,104,0,0,0,24,128v56a16,16,0,0,0,16,16H64a16,16,0,0,0,16-16V128a16,16,0,0,0-16-16H40.66a87.67,87.67,0,0,1,174.68,0H192a16,16,0,0,0-16,16v56a16,16,0,0,0,16,16h24a16,16,0,0,0,16-16V128A104,104,0,0,0,128,24Z"
						fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
						stroke-width="16" />
				</svg>
			</div>
			<div class="footer-text">
				<h4>Hỗ trợ tận tâm 24/7</h4>
				<p>Giải đáp mọi thắc mắc</p>
			</div>
		</div>
	</footer>

	<section class="trust-banner">
		<div class="trust-content">
			<div class="trust-left">
				<div class="trust-number">HƠN 15.000+</div>
				<div class="trust-label">HỌC VIÊN ĐÃ TIN TƯỞNG</div>
			</div>

			<div class="trust-divider"></div>

			<div class="trust-middle">
				<div class="trust-rating">
					<div class="rating-score">
						<span class="score">4.9/5</span>
						<span class="stars">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 256 256">
								<path fill="currentColor"
									d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z" />
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 256 256">
								<path fill="currentColor"
									d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z" />
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 256 256">
								<path fill="currentColor"
									d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z" />
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 256 256">
								<path fill="currentColor"
									d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z" />
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 256 256">
								<path fill="currentColor"
									d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z" />
							</svg>
						</span>
					</div>
					<div class="rating-label">ĐÁNH GIÁ TRUNG BÌNH</div>
				</div>
				<div class="trust-quote">
					<p>“Prephub là nền tảng luyện thi TOEIC <br>tốt nhất mà mình từng sử dụng!”</p>
					<p class="quote-author">- Minh Anh, 875 TOEIC</p>
				</div>
			</div>

			<div class="trust-right">
				<div class="laurel-badge">
					<img src="../img/875.png" alt="875 TOEIC" class="laurel-img">
				</div>
			</div>
		</div>
	</section>

	<section class="faq-container-new">
		<div class="faq-inner">

			<!-- Ray lines -->
			<div class="ray-container-v">
				<div class="ray-line-v ray-left"></div>
				<div class="ray-line-v ray-right"></div>
			</div>

			<!-- Header -->
			<div class="faq-header">
				<div class="faq-badge">
					<i class='bx bx-message-circle-reply'></i>
					<span>FAQ's</span>
				</div>

				<div class="faq-header-flex">
					<div class="faq-title-group">
						<h2 class="faq-title-new">Câu hỏi thường gặp</h2>
						<p class="faq-subtitle">Tìm câu trả lời cho các câu hỏi thường gặp về Prephub, bao gồm tính
							năng, gói học và các hình thức thanh toán.</p>
					</div>

					<div class="faq-actions">
						<a href="#" class="faq-btn faq-btn-primary">Xem tất cả</a>
						<a href="#" class="faq-btn faq-btn-outline">Liên hệ với chúng tôi</a>
					</div>
				</div>
			</div>

			<!-- FAQ -->
			<div class="faq-grid-area">
				
				<div class="ray-line-h ray-top"></div>
				<div class="ray-line-h ray-bottom"></div>

				
				<div class="ray-line-v ray-center"></div>

				
				<div class="ray-corner top-left"></div>
				<div class="ray-corner top-right"></div>
				<div class="ray-corner bottom-left"></div>
				<div class="ray-corner bottom-right"></div>

				<div class="faq-grid-cols">

				
					<div class="faq-col">

						<div class="faq-item-new" onclick="toggleFaq(this)">
							<button class="faq-item-header">
								<span class="faq-q">Gói Premium có thời hạn bao lâu?</span>
								<span class="faq-icon">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
										stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
										<line x1="12" y1="5" x2="12" y2="19"></line>
										<line x1="5" y1="12" x2="19" y2="12"></line>
									</svg>
								</span>
							</button>
							<div class="faq-item-body">
								<div class="faq-body-inner">
									<div class="faq-divider"></div>
									<div class="faq-a">Bạn có thể lựa chọn gói theo tháng hoặc theo năm tùy nhu cầu. Gói
										năm sẽ giúp bạn tiết kiệm đến 20% chi phí so với gói tháng.</div>
								</div>
							</div>
						</div>

						<div class="faq-item-new" onclick="toggleFaq(this)">
							<button class="faq-item-header">
								<span class="faq-q">Tôi có thể hủy gói bất kỳ lúc nào không?</span>
								<span class="faq-icon">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
										stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
										<line x1="12" y1="5" x2="12" y2="19"></line>
										<line x1="5" y1="12" x2="19" y2="12"></line>
									</svg>
								</span>
							</button>
							<div class="faq-item-body">
								<div class="faq-body-inner">
									<div class="faq-divider"></div>
									<div class="faq-a">Hoàn toàn được! Bạn có thể hủy gia hạn gói Premium ngay trong
										phần cài đặt tài khoản mà không gặp bất kỳ ràng buộc nào.</div>
								</div>
							</div>
						</div>

						<div class="faq-item-new" onclick="toggleFaq(this)">
							<button class="faq-item-header">
								<span class="faq-q">Tài liệu học tập được cập nhật như thế nào?</span>
								<span class="faq-icon">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
										stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
										<line x1="12" y1="5" x2="12" y2="19"></line>
										<line x1="5" y1="12" x2="19" y2="12"></line>
									</svg>
								</span>
							</button>
							<div class="faq-item-body">
								<div class="faq-body-inner">
									<div class="faq-divider"></div>
									<div class="faq-a">Chúng tôi cập nhật đề thi và bài giảng hàng tuần dựa trên xu
										hướng ra đề TOEIC mới nhất năm 2026. Đội ngũ giáo viên luôn theo sát format đề
										thực tế.</div>
								</div>
							</div>
						</div>

						<div class="faq-item-new" onclick="toggleFaq(this)">
							<button class="faq-item-header">
								<span class="faq-q">Hình thức thanh toán gồm những gì?</span>
								<span class="faq-icon">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
										stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
										<line x1="12" y1="5" x2="12" y2="19"></line>
										<line x1="5" y1="12" x2="19" y2="12"></line>
									</svg>
								</span>
							</button>
							<div class="faq-item-body">
								<div class="faq-body-inner">
									<div class="faq-divider"></div>
									<div class="faq-a">Prephub hỗ trợ đa dạng hình thức: Chuyển khoản ngân hàng
										(Vietcombank, MB Bank), Ví điện tử (Momo, ZaloPay) và thẻ Visa/Mastercard an
										toàn tuyệt đối.</div>
								</div>
							</div>
						</div>

						<div class="faq-item-new" onclick="toggleFaq(this)">
							<button class="faq-item-header">
								<span class="faq-q">Học viên Premium có được hỗ trợ 1-1 không?</span>
								<span class="faq-icon">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
										stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
										<line x1="12" y1="5" x2="12" y2="19"></line>
										<line x1="5" y1="12" x2="19" y2="12"></line>
									</svg>
								</span>
							</button>
							<div class="faq-item-body">
								<div class="faq-body-inner">
									<div class="faq-divider"></div>
									<div class="faq-a">Chắc chắn rồi. Học viên Premium sẽ được ưu tiên giải đáp thắc mắc
										bởi đội ngũ giáo viên và trợ giảng tận tâm trong suốt quá trình học tập.</div>
								</div>
							</div>
						</div>

					</div>

				
					<div class="faq-col">

						<div class="faq-item-new" onclick="toggleFaq(this)">
							<button class="faq-item-header">
								<span class="faq-q">Làm sao để nâng cấp từ gói lẻ lên Trọn bộ?</span>
								<span class="faq-icon">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
										stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
										<line x1="12" y1="5" x2="12" y2="19"></line>
										<line x1="5" y1="12" x2="19" y2="12"></line>
									</svg>
								</span>
							</button>
							<div class="faq-item-body">
								<div class="faq-body-inner">
									<div class="faq-divider"></div>
									<div class="faq-a">Bạn có thể nâng cấp bất cứ lúc nào. Hệ thống sẽ tự động tính trừ
										số tiền bạn đã thanh toán cho gói lẻ trước đó, bạn chỉ cần thanh toán phần chênh
										lệch.</div>
								</div>
							</div>
						</div>

						<div class="faq-item-new" onclick="toggleFaq(this)">
							<button class="faq-item-header">
								<span class="faq-q">Có cam kết đầu ra không?</span>
								<span class="faq-icon">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
										stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
										<line x1="12" y1="5" x2="12" y2="19"></line>
										<line x1="5" y1="12" x2="19" y2="12"></line>
									</svg>
								</span>
							</button>
							<div class="faq-item-body">
								<div class="faq-body-inner">
									<div class="faq-divider"></div>
									<div class="faq-a">Prephub thiết kế lộ trình cá nhân hóa dựa trên bài test đầu vào.
										Nếu bạn hoàn thành đúng 100% lộ trình theo hướng dẫn, chúng tôi đảm bảo bạn sẽ
										đạt mục tiêu đã đề ra.</div>
								</div>
							</div>
						</div>

						<div class="faq-item-new" onclick="toggleFaq(this)">
							<button class="faq-item-header">
								<span class="faq-q">Tôi có thể dùng nhiều thiết bị cùng lúc không?</span>
								<span class="faq-icon">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
										stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
										<line x1="12" y1="5" x2="12" y2="19"></line>
										<line x1="5" y1="12" x2="19" y2="12"></line>
									</svg>
								</span>
							</button>
							<div class="faq-item-body">
								<div class="faq-body-inner">
									<div class="faq-divider"></div>
									<div class="faq-a">Để đảm bảo quyền lợi và bảo mật, mỗi tài khoản Premium có thể
										đăng nhập trên tối đa 2 thiết bị (ví dụ: 1 điện thoại và 1 máy tính) để thuận
										tiện cho việc học.</div>
								</div>
							</div>
						</div>

						<div class="faq-item-new" onclick="toggleFaq(this)">
							<button class="faq-item-header">
								<span class="faq-q">Làm sao để góp ý tính năng?</span>
								<span class="faq-icon">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
										stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
										<line x1="12" y1="5" x2="12" y2="19"></line>
										<line x1="5" y1="12" x2="19" y2="12"></line>
									</svg>
								</span>
							</button>
							<div class="faq-item-body">
								<div class="faq-body-inner">
									<div class="faq-divider"></div>
									<div class="faq-a">Chúng tôi luôn trân trọng ý kiến của bạn! Bạn có thể sử dụng nút
										"Góp ý" trực tiếp trong trang học hoặc liên hệ qua Fanpage để gửi yêu cầu tính
										năng mới.</div>
								</div>
							</div>
						</div>

						<div class="faq-item-new" onclick="toggleFaq(this)">
							<button class="faq-item-header">
								<span class="faq-q">Có được học thử trước khi mua không?</span>
								<span class="faq-icon">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
										stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
										<line x1="12" y1="5" x2="12" y2="19"></line>
										<line x1="5" y1="12" x2="19" y2="12"></line>
									</svg>
								</span>
							</button>
							<div class="faq-item-body">
								<div class="faq-body-inner">
									<div class="faq-divider"></div>
									<div class="faq-a">Tất nhiên! Prephub cung cấp miễn phí bài test đầu vào cùng một số
										bài học thử ở mỗi cấp độ, giúp bạn trải nghiệm trực tiếp chất lượng nền tảng
										trước khi nâng cấp.</div>
								</div>
							</div>
						</div>

					</div>

				</div>
			</div>

			<div class="bottom-action">
				<a href="user.php" class="accent-btn" aria-label="Quay về trang chủ"></a>
			</div>
		</div>
	</section>

	<script>
		const toggleContainer = document.getElementById('priceToggle');
		const monthlyBtn = document.getElementById('monthlyBtn');
		const yearlyBtn = document.getElementById('yearlyBtn');
		const priceAmounts = document.querySelectorAll('.price-amount');
		const pricePeriods = document.querySelectorAll('.price-period');

		let isYearly = false;

		function updatePrices() {
			priceAmounts.forEach((el) => el.style.opacity = '0');
			pricePeriods.forEach((el) => el.style.opacity = '0');

			setTimeout(() => {
				priceAmounts.forEach((el) => {
					el.textContent = isYearly ? el.getAttribute('data-yearly') : el.getAttribute('data-monthly');
					el.style.opacity = '1';
				});
				pricePeriods.forEach((el) => {
					el.textContent = isYearly ? el.getAttribute('data-yearly-suffix') : el.getAttribute('data-monthly-suffix');
					el.style.opacity = '1';
				});
			}, 150);
		}

		toggleContainer.addEventListener('click', () => {
			isYearly = !isYearly;
			if (isYearly) {
				toggleContainer.classList.add('yearly');
				yearlyBtn.classList.add('active');
				monthlyBtn.classList.remove('active');
			} else {
				toggleContainer.classList.remove('yearly');
				monthlyBtn.classList.add('active');
				yearlyBtn.classList.remove('active');
			}
			updatePrices();
		});

		monthlyBtn.addEventListener('click', () => {
			if (isYearly) {
				isYearly = false;
				toggleContainer.classList.remove('yearly');
				monthlyBtn.classList.add('active');
				yearlyBtn.classList.remove('active');
				updatePrices();
			}
		});

		yearlyBtn.addEventListener('click', () => {
			if (!isYearly) {
				isYearly = true;
				toggleContainer.classList.add('yearly');
				yearlyBtn.classList.add('active');
				monthlyBtn.classList.remove('active');
				updatePrices();
			}
		});

		priceAmounts.forEach(el => el.style.transition = 'opacity 0.2s');
		pricePeriods.forEach(el => el.style.transition = 'opacity 0.2s');

		function toggleFaq(element) {
			const allFaqs = document.querySelectorAll('.faq-item-new');
			allFaqs.forEach(faq => {
				if (faq !== element && faq.classList.contains('is-open')) {
					faq.classList.remove('is-open');
				}
			});
			element.classList.toggle('is-open');
		}
	</script>
</body>

</html>