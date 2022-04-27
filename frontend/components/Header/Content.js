const Content = (props) => {
    return (
        <>
            <div className="row">
                <h2><b>LANDING PAGE FOR REAL ESTATE</b></h2>
            </div>
            <div className="row">
                <p>{props.landing.longText}</p>
            </div>
            <div className="row">            
                <div className="btn btn-primary">Read More</div>
            </div>
        </>
    )
}
export default Content;