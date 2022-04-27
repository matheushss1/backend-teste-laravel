import MenuItems from "./MenuItems"
import {useEffect} from 'react'
import {Container} from 'react-bootstrap'
import Content from "./Content"
const Header = (props) => {
    useEffect(() => {
        console.log(props)
    },[])
    return (
        <div className="container-fluid" style={{backgroundImage: `url(${props?.info?.landingInfos?.imageHeaderBase64})`, backgroundSize: 'cover', height: '30rem'}}>

            <MenuItems landing={props.info.landingInfos} />
            <Content landing={props.info.landingInfos} />
        </div>
    )
}
export default Header