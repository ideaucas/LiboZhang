<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<head>
    <title>国科大计算机应用与理论</title>
    <?php include 'head.php'; ?>
</head>

<body>
    <?php include 'top.php'; ?>
    <div class="middle">
        <div class="middle-left">
            <br/>
            <ul style="list-style:none;font-size:100%;">
                <li><a href="#GM">Grid Measurement</a></li>
                <li><a href="#WM">Web Mining</a></li>
                <li><a href="#TM">Trust Metrics</a></li>
                <li><a href="#WS">Web Scalability</a></li>
                <li><a href="#IG">Instrument Grid</a></li>
                <li><a href="#SM">Security Metrics</a></li>
                <li><a href="#SW">Semantic Web</a></li>
                <li><a href="#WV">Web Visulizaiton</a></li>
            </ul>
            <!--  以下内容请勿修改-->
            <div id="do_not_change">
                <?php
                    $path="./research.php";
                    include '_pageedit.php';
                ?>
            </div>
            <!--  以上内容请勿修改-->
        </div>
        <div class="middle-right">
            <br/><h2>Research</h2><br/>
            <h2 id="GM">Grid Measurement</h2><hr/><br/>
            <h3>Problem Description and Goals</h3><br/>
            <p style="margin-left:50px;">A typical distributed application involves a large number of resources that can fail, including network, hardware and software components. Even when monitoring information from all these components is accessible, it is hard to determine how anomalies and failures during the application execution are related to a given component. However the capability of receiving and interpreting intermediate results and interacting with applications plays a significant role for developing scientific experiments. Considering the complexity of implementation of distributed systems and the large scope of issues the monitoring system should cover, what analysis and planning is required to implement effective grid monitoring? This research proposes a multi-layer approach which focuses on a clear identification of both the application-level and system-level monitoring abstractions. Through a clear separation between higher and lower level mechanisms, this approach will allow the specification of application monitoring requirements at each level, and their implementation upon distinct monitoring technologies, including the ones supported by existing grid middleware. </p><br/>
            <br/>
            <p style="margin-left:50px;">Wei Liu, Ph.D. student </p><br/>
            <h2 id="WM">Web Mining</h2><hr/><br/>
            <h3>Problem Description and Goals</h3><br/>
            <p style="margin-left:50px;">none</p><br/>
            <br/>
            <p style="margin-left:50px;">Jinliang Song, Ph.D. student </p><br/>
            <h2 id="TM">Trust Metrics</h2><hr/><br/>
            <h3>Problem Description and Goals</h3><br/>
            <p style="margin-left:50px;">In web social network system, trust is considered as the judgment expressed by one user about another user, often directly and explicitly, sometimes indirectly through an evaluation of the artifacts produced by that user or his/her activity on the system. How trust is used and modeled in online systems currently available on the Web or on the Internet. The information overload and introducing trust as a possible and powerful way to deal with it. It then provides a classification of the systems that currently use trust and, for each category, presents the most representative examples. We hence use the term “trust” to indicate different types of social relationships between two users, such as friendship, appreciation, and interest. These trust relationships are used by the systems in order to infer some measure of importance about the different users and influence their visibility on the system. </p><br/>
            <br/>
            <p style="margin-left:50px;">Su Chen, Ph.D. student </p><br/>
            <h2 id="WS">Web Scalability</h2><hr/><br/>
            <h3>Problem Description and Goals</h3><br/>
            <p style="margin-left:50px;">none</p><br/>
            <br/>
            <p style="margin-left:50px;">Yanxiang Xu, Ph.D. student </p><br/>
            <h2 id="IG">Instrument Grid</h2><hr/><br/>
            <h3>Problem Description and Goals</h3><br/>
            <p style="margin-left:50px;">Instrument grid is one of the grid computing applications that enables user to share modern instruments globally. However, scheduling the instruments to the users efficiently and effectively in these systems is a complex undertaking. This is due to the complex characters of the distributed instruments and great difficulty in collection these characters. In Instrument grid, the user wants to choose better instrument, maybe a cheap or performed well one. And the instrument provider wants to get more economy interests from the sharing. There demands a scheduler that allocates the resources and satisfies both the user and provider.We regard the sharing of instrument online as an economic behavior. The economy benefits of providers can push more and more instrument owners join in the distributed instrumentation system. </p><br/>
            <br/>
            <p style="margin-left:50px;">Yuli Jin, Master student</p><br/>
            <h2 id="SM">Security Metrics</h2><hr/><br/>
            <h3>Problem Description and Goals</h3><br/>
            <p style="margin-left:50px;">none</p><br/>
            <br/>
            <p style="margin-left:50px;">Feng Gao, Master student </p><br/>
            <h2 id="SW">Semantic Web</h2><hr/><br/>
            <h3>Problem Description and Goals</h3><br/>
            <p style="margin-left:50px;">none</p><br/>
            <br/>
            <p style="margin-left:50px;">Xianggen Wang,Master student</p><br/>
            <h2 id="WV">Web Visulizaiton</h2><hr/><br/>
            <h3>Problem Description and Goals</h3><br/>
            <p style="margin-left:50px;">none</p><br/>
            <br/>
            <p style="margin-left:50px;">Chi Zhang, Master student</p><br/>
        </div>
        <div style="clear:both"></div>
    </div>
    <br/>
    <?php include 'footer.php'; ?>
</body>
</html>