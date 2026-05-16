<?php
session_start();
//Kiểm tra xem user có đăng nhập hay chưa
//Tránh việc lên URL gõ user.php là ra trang này
require_once '../../server/middleware/auth.php';
homeRedirect();


// Lấy username để hiển thị ở greeting box
$firstName = $_SESSION['first_name'] ?? '';
$lastName = $_SESSION['last_name'] ?? '';
$fullName = trim($lastName . ' ' . $firstName);
?>
<!doctype html>
<html lang="vi">

<head>
    <?php include './components/metadata.php'; ?>
    <title>PREHUB - Luyện Thi TOEIC</title>
    <link rel="stylesheet" href="../styles/user.css">
</head>

<body>
    <!-- INCLUDE NAVBAR FILE -->
    <?php include './components/navbar.php'; ?>
    <!-- GREETING HERO (FULL WIDTH) -->
    <div class="greeting-hero">
        <div class="greeting-hero-inner">
            <div class="greet-left">
                <div class="greet-time">Chào buổi sáng ☀️</div>
                <div class="greet-name">
                    Xin chào, <?= htmlspecialchars($fullName) ?>!
                    <?php if (isset($_SESSION['is_premium']) && $_SESSION['is_premium']): ?>
                        <span class="premium-badge"><i class="fas fa-crown"></i> Premium</span>
                    <?php endif; ?>
                </div>
                <div class="greet-sub">Tiếp tục luyện thi để đạt mục tiêu<br>TOEIC của bạn. Bạn đang làm rất tốt!</div>
                <div class="greet-cta">
                    <a href="tests.php" class="cta-btn cta-primary" style="text-decoration: none;">
                        <i class="fas fa-play" style="font-size:11px;margin-right:6px"></i>Làm bài ngay
                    </a>
                </div>
            </div>
            <div class="greet-right">
                <div class="greet-stats">
                    <div class="gstat">
                        <div class="gstat-val">24</div>
                        <div class="gstat-label">Bài đã làm</div>
                    </div>
                    <div class="gstat">
                        <div class="gstat-val">580</div>
                        <div class="gstat-label">Điểm cao nhất</div>
                    </div>
                    <div class="gstat">
                        <div class="gstat-val">73%</div>
                        <div class="gstat-label">Độ chính xác</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page">

        <!-- Danh sách đề thi -->
        <div>
            <div class="section-head" style="margin-bottom:12px">
                <div class="section-title">Danh sách đề thi</div>
                <a class="see-all" href="tests.php">Xem tất cả →</a>
            </div>
            <!-- Ô hiển thị 3 đề thi cho người dùng thử -->
            <!-- Sau khi có logic nộp bài, trang user.php chỉ hiện thị đề thi chưa làm -->
            <div class="test-grid">

            </div>
        </div>

        <!-- Lịch sử làm bài -->
        <div class="bottom-row">
            <div class="panel">
                <div class="panel-head">
                    <span class="panel-title">Bài làm gần đây</span>
                    <a class="see-all" href="#">Xem tất cả →</a>
                </div>
                <div class="recent-list">
                    <div class="recent-item">
                        <div class="recent-icon"><i class="fas fa-file-alt"></i></div>
                        <div>
                            <div class="recent-name">TOEIC Mock Test Jan 2024</div>
                            <div class="recent-date">23/04/2024 · 33:58</div>
                        </div>
                        <span class="score-pill s-hi">650</span>
                    </div>
                    <div class="recent-item">
                        <div class="recent-icon"><i class="fas fa-pen"></i></div>
                        <div>
                            <div class="recent-name">Grammar Sprint #8</div>
                            <div class="recent-date">29/03/2024 · 20:10</div>
                        </div>
                        <span class="score-pill s-mid">61%</span>
                    </div>
                    <div class="recent-item">
                        <div class="recent-icon"><i class="fas fa-book-open"></i></div>
                        <div>
                            <div class="recent-name">Reading Mock #3</div>
                            <div class="recent-date">28/03/2024 · 36:17</div>
                        </div>
                        <span class="score-pill s-lo">44%</span>
                    </div>
                    <div class="recent-item">
                        <div class="recent-icon"><i class="fas fa-headphones"></i></div>
                        <div>
                            <div class="recent-name">Listening Sprint #5</div>
                            <div class="recent-date">26/03/2024 · 49:24</div>
                        </div>
                        <span class="score-pill s-hi">82%</span>
                    </div>
                </div>
            </div>

            <!-- Phần mẹo luyện thi để trang trí -->
            <div class="panel">
                <div class="panel-head">
                    <span class="panel-title">Mẹo luyện thi</span>
                </div>
                <div class="tips-list">
                    <div class="tip-item">
                        <div class="tip-num">1</div>
                        <div>
                            <div class="tip-text">Luyện nghe mỗi ngày 15 phút</div>
                            <div class="tip-sub">Cải thiện Part 3 & 4 hiệu quả nhất</div>
                        </div>
                    </div>
                    <div class="tip-item">
                        <div class="tip-num">2</div>
                        <div>
                            <div class="tip-text">Đọc báo tiếng Anh hàng ngày</div>
                            <div class="tip-sub">Tăng tốc độ đọc cho Part 6 & 7</div>
                        </div>
                    </div>
                    <div class="tip-item">
                        <div class="tip-num">3</div>
                        <div>
                            <div class="tip-text">Ôn tập ngữ pháp Part 5 theo chủ đề</div>
                            <div class="tip-sub">Từ vựng + ngữ pháp = điểm cao hơn</div>
                        </div>
                    </div>
                    <div class="tip-item">
                        <div class="tip-num">4</div>
                        <div>
                            <div class="tip-text">Làm full test mỗi 2 tuần một lần</div>
                            <div class="tip-sub">Track tiến độ và làm quen áp lực thời gian</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- STAT CARDS FROM DASHBOARD -->
        <section class="stat-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; margin-bottom: 32px;">
            <div class="stat-card" style="background: #fff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 24px; display: flex; align-items: center; gap: 20px;">
                <div class="stat-icon" style="width: 56px; height: 56px; border-radius: 12px; display: flex; align-items: center; justify-content: center; background: #e0f2fe; color: #0284c7; font-size: 24px;">
                    <i class="fas fa-trophy"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label" style="font-size: 13px; color: #64748b; font-weight: 600; text-transform: uppercase;">Điểm cao nhất</div>
                    <div class="stat-value" id="max-score" style="font-size: 28px; font-weight: 700; color: #05102b;">0</div>
                    <div class="stat-sub" style="font-size: 12px; color: #94a3b8;">Tổng điểm tốt nhất</div>
                </div>
            </div>

            <div class="stat-card" style="background: #fff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 24px; display: flex; align-items: center; gap: 20px;">
                <div class="stat-icon" style="width: 56px; height: 56px; border-radius: 12px; display: flex; align-items: center; justify-content: center; background: #e1f5ee; color: #1d9e75; font-size: 24px;">
                    <i class="fas fa-file-circle-check"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label" style="font-size: 13px; color: #64748b; font-weight: 600; text-transform: uppercase;">Số bài đã làm</div>
                    <div class="stat-value" id="total-tests" style="font-size: 28px; font-weight: 700; color: #05102b;">0</div>
                    <div class="stat-sub" style="font-size: 12px; color: #94a3b8;">Tổng số đề hoàn thành</div>
                </div>
            </div>

            <div class="stat-card" style="background: #fff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 24px; display: flex; align-items: center; gap: 20px;">
                <div class="stat-icon" style="width: 56px; height: 56px; border-radius: 12px; display: flex; align-items: center; justify-content: center; background: #ffedd5; color: #c2410c; font-size: 24px;">
                    <i class="fas fa-stopwatch"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-label" style="font-size: 13px; color: #64748b; font-weight: 600; text-transform: uppercase;">Thời gian trung bình</div>
                    <div class="stat-value" id="avg-time" style="font-size: 28px; font-weight: 700; color: #05102b;">0m</div>
                    <div class="stat-sub" style="font-size: 12px; color: #94a3b8;">Thời gian làm bài TB</div>
                </div>
            </div>
        </section>

        <!-- MAIN DASHBOARD (CHART & TIPS) -->
        <section class="dashboard-layout" style="display: grid; grid-template-columns: 1.5fr 1fr; gap: 24px; margin-bottom: 32px;">
            <!-- CHART -->
            <div class="dashboard-card chart-card" style="background: #fff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 24px;">
                <div class="card-head" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px;">
                    <div class="card-title-wrap" style="display: flex; gap: 16px; align-items: center;">
                        <div class="card-icon" style="width: 48px; height: 48px; border-radius: 12px; background: #f1f5f9; color: #05102b; display: flex; align-items: center; justify-content: center; font-size: 20px;">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div>
                            <h2 style="font-size: 18px; font-weight: 700; color: #05102b; margin: 0 0 4px 0;">Tiến độ điểm số</h2>
                            <p style="font-size: 13px; color: #64748b; margin: 0;">Dữ liệu các lần thi gần đây.</p>
                        </div>
                    </div>
                </div>
                <div class="chart-wrapper" style="height: 300px; width: 100%;">
                    <canvas id="scoreChart"></canvas>
                </div>
            </div>

            <!-- SIDE PANEL -->
            <aside class="dashboard-side" style="display: flex; flex-direction: column; gap: 24px;">
                <div class="dashboard-card goal-card" style="background: #05102b; color: white; border-radius: 16px; padding: 24px; position: relative; overflow: hidden;">
                    <div style="position: relative; z-index: 1;">
                        <div class="goal-icon" style="width: 40px; height: 40px; border-radius: 10px; background: rgba(255,255,255,0.1); color: #1d9e75; display: flex; align-items: center; justify-content: center; font-size: 18px; margin-bottom: 16px;">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h3 style="font-size: 16px; font-weight: 700; margin-bottom: 8px;">Mục tiêu hiện tại</h3>
                        <p style="font-size: 13px; color: rgba(255,255,255,0.7); margin-bottom: 24px; line-height: 1.5;">Duy trì luyện tập đều đặn để cải thiện điểm số từng tuần.</p>
                        <div class="goal-row" style="display: flex; justify-content: space-between; font-size: 13px; margin-bottom: 8px; font-weight: 600;">
                            <span>Tiến độ</span>
                            <strong style="color: #1d9e75;">77%</strong>
                        </div>
                        <div class="goal-bar" style="height: 6px; background: rgba(255,255,255,0.1); border-radius: 3px; overflow: hidden;">
                            <div class="goal-fill" style="width: 77%; height: 100%; background: #1d9e75; border-radius: 3px;"></div>
                        </div>
                    </div>
                </div>

                <div class="dashboard-card tip-card" style="background: #fff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 24px;">
                    <div class="tip-head" style="font-size: 15px; font-weight: 700; color: #05102b; margin-bottom: 16px; display: flex; align-items: center; gap: 8px;">
                        <i class="fas fa-lightbulb" style="color: #f39c12;"></i> Gợi ý luyện tập
                    </div>
                    <div class="tip-item" style="display: flex; gap: 12px; margin-bottom: 16px;">
                        <span style="font-size: 12px; font-weight: 700; color: #1d9e75; background: #e1f5ee; padding: 4px 8px; border-radius: 6px; height: fit-content;">01</span>
                        <p style="font-size: 13px; color: #64748b; margin: 0; line-height: 1.5;">Làm lại các đề có điểm Reading thấp để cải thiện tốc độ đọc.</p>
                    </div>
                    <div class="tip-item" style="display: flex; gap: 12px;">
                        <span style="font-size: 12px; font-weight: 700; color: #1d9e75; background: #e1f5ee; padding: 4px 8px; border-radius: 6px; height: fit-content;">02</span>
                        <p style="font-size: 13px; color: #64748b; margin: 0; line-height: 1.5;">Ôn lại Part 3 và Part 4 nếu điểm Listening chưa ổn định.</p>
                    </div>
                </div>
            </aside>
        </section>

        <!-- HISTORY TABLE -->
        <section class="dashboard-card history-card" style="background: #fff; border: 1px solid #e2e8f0; border-radius: 16px; overflow: hidden;">
            <div class="card-head" style="padding: 24px; border-bottom: 1px solid #f1f5f9; display: flex; justify-content: space-between; align-items: center; background: #f8fafc;">
                <div class="card-title-wrap" style="display: flex; gap: 16px; align-items: center;">
                    <div class="card-icon" style="width: 40px; height: 40px; border-radius: 10px; background: #e0f2fe; color: #0284c7; display: flex; align-items: center; justify-content: center; font-size: 16px;">
                        <i class="fas fa-clock-rotate-left"></i>
                    </div>
                    <div>
                        <h2 style="font-size: 16px; font-weight: 700; color: #05102b; margin: 0 0 4px 0;">Lịch sử làm bài</h2>
                        <p style="font-size: 12px; color: #64748b; margin: 0;">Kết quả các bài thi gần đây</p>
                    </div>
                </div>
                <a href="attempts.php" class="view-all" style="font-size: 13px; font-weight: 600; color: #1d9e75; text-decoration: none; display: flex; align-items: center; gap: 6px;">
                    Xem tất cả <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            <div class="table-wrap" style="overflow-x: auto;">
                <table class="history-table" style="width: 100%; border-collapse: collapse; text-align: left;">
                    <thead>
                        <tr style="background: #fff; border-bottom: 2px solid #f1f5f9;">
                            <th style="padding: 16px 24px; font-size: 12px; font-weight: 600; color: #64748b; text-transform: uppercase;">Ngày thi</th>
                            <th style="padding: 16px 24px; font-size: 12px; font-weight: 600; color: #64748b; text-transform: uppercase;">Đề thi</th>
                            <th style="padding: 16px 24px; font-size: 12px; font-weight: 600; color: #64748b; text-transform: uppercase;">Listening</th>
                            <th style="padding: 16px 24px; font-size: 12px; font-weight: 600; color: #64748b; text-transform: uppercase;">Reading</th>
                            <th style="padding: 16px 24px; font-size: 12px; font-weight: 600; color: #64748b; text-transform: uppercase;">Tổng điểm</th>
                            <th style="padding: 16px 24px; font-size: 12px; font-weight: 600; color: #64748b; text-transform: uppercase;">Thời gian</th>
                            <th style="padding: 16px 24px; font-size: 12px; font-weight: 600; color: #64748b; text-transform: uppercase;">Hành động</th>
                        </tr>
                    </thead>
                    <tbody id="history-body">
                        <!-- Populated by JS -->
                    </tbody>
                </table>
            </div>
        </section>

    </div>

    <!-- INCLUDE FOOTER FILE -->
    <?php include './components/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../js/user.js"></script>
    <script src="../js/dashboard.js"></script>

</body>

</html>