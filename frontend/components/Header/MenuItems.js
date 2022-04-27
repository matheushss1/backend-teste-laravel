const MenuItems = (props) => {
    return (
        <div className="row d-flex">
            <div className="col-6 justify-items-center">
                <img src={props.landing.iconHouseBase64}></img>
            </div>
            <div className="col-2">
                Contact Us
            </div>
            <div className="col-2">
                Call: {props.landing.phone}
            </div>
            <div className="col-2">
                Email: {props.landing.email}
            </div>
        </div>
    )
}
export default MenuItems;